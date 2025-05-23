<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use DateTime;
use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent as ActionEventEntity;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent as ActionEventEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\ActionEventRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

#[AsCommand(
    name: 'app:gebruikers:inactiviteit:verwijderen',
    description: 'Commando om gebruikers welke inactief zijn te anonimizeren en verwijderen.',
)]
class VerwijderGebruikerVanwegeInactiviteit extends Command
{
    const DAGEN_LIMIET_VERWIJDEREN_INACTIEF = 180;

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly EventDispatcherInterface $eventDispatcher,
        private readonly array $anoniemeGebruiker = [
            'naam' => 'Geanonimiseerd',
            'email' => 'Geanonimiseerd',
            'username' => 'Geanonimiseerd',
            'type' => 'Geanonimiseerd',
        ],
        private int $updatedActionEventlogCount = 0,

    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('app:gebruikers:inactiviteit:verwijderen');
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title(
            'Anonimizeer en verwijder gebruikers welke inactief zijn sinds ' . self::DAGEN_LIMIET_VERWIJDEREN_INACTIEF . ' dagen.'
        );

        /** @var GebruikerRepository $gebruikerRepository */
        $gebruikerRepository = $this->em->getRepository(Gebruiker::class);
        $gebruikers = $gebruikerRepository->findActiveGebruikersInactiveForDays(
            self::DAGEN_LIMIET_VERWIJDEREN_INACTIEF
        );

        if (count($gebruikers) === 0) {
            $io->success('Geen inactieve gebruikers gevonden welke geanonimiseerd en verwijderd moeten worden');
            return Command::SUCCESS;
        }

        $io->info(
            'Er zijn ' .
            count($gebruikers) .
            ' gebruikers gevonden welke inactief zijn. Deze zullen worden geanonimiseerd en verwijderd. Referenties naar deze gebruikers in de logs zullen ook verwijderd worden.'
        );

        /** @var Gebruiker $gebruiker */
        foreach ($gebruikers as $gebruiker) {
            $this->anonimizeerGebruikersData($gebruiker);
        }
        $this->em->flush();

        $this->eventDispatcher->dispatch(
            ActionEventEvent::registerGebruikerAutomatischAangepast(
                ActionEventEvent::GEBRUIKER_DELETED_SYSTEM,
                __CLASS__,
                count($gebruikers),
                $this->updatedActionEventlogCount
            ),
            ActionEventEvent::NAME
        );

        $io->success('Commando succesvol uitgevoerd');
        return Command::SUCCESS;
    }

    /**
     * @param Gebruiker $gebruiker
     * @return void
     * @throws Exception
     */
    private function verwijderGebruikerUitActionEventLog(Gebruiker $gebruiker): void
    {
        /** @var ActionEventRepository $actionEventRepository */
        $actionEventRepository = $this->em->getRepository(ActionEventEntity::class);
        $rawActionEvents = $actionEventRepository->findAllWhereDataContainsRaw($gebruiker->getEmail());

        foreach ($rawActionEvents as $rawActionEvent) {
            /** @var ActionEventEntity $actionEvent */
            $actionEvent = $actionEventRepository->find($rawActionEvent['id']);

            $data = $actionEvent->getData();
            if (
                isset($data['gebruiker']['email']) &&
                $data['gebruiker']['email'] === $gebruiker->getEmail()
            ) {
                $data['gebruiker'] = $this->anoniemeGebruiker;
            }

            if (
                isset($data['gewijzigd']['gebruiker']['email']) &&
                $data['gewijzigd']['gebruiker']['email'] === $gebruiker->getEmail()
            ) {
                $data['gewijzigd']['gebruiker'] = $this->anoniemeGebruiker;
            }

            $actionEvent->setData($data);
            $this->em->persist($actionEvent);
            $this->updatedActionEventlogCount++;
        }
        $this->em->flush();
    }

    private function anonimizeerGebruikersData(Gebruiker $gebruiker): void
    {
        $this->verwijderGebruikerUitActionEventLog($gebruiker);
        $gebruiker->setEnabled(false);
        $gebruiker->setVerwijderd(new DateTime());
        $gebruiker->anonymize();

        $this->em->persist($gebruiker);
    }
}
