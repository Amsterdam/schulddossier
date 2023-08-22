<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\GebruikerRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

#[AsCommand(
    name: 'app:gebruikers:inactiviteit:deactiveren',
    description: 'Commando om gebruikers welke inactief zijn te deactiveren.',
)]
class DisableGebruikerVanwegeInactiviteit extends Command
{
    const DAGEN_LIMIET_INACTIEF = 90;

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly EventDispatcherInterface $eventDispatcher
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('app:gebruikers:inactiviteit:deactiveren');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Deactiveer gebruikers welke inactief zijn sinds ' . self::DAGEN_LIMIET_INACTIEF . ' dagen.');

        /** @var GebruikerRepository $gebruikerRepository */
        $gebruikerRepository = $this->em->getRepository(Gebruiker::class);
        $gebruikers = $gebruikerRepository->findActiveGebruikersInactiveForDays(self::DAGEN_LIMIET_INACTIEF, true);

        $countGebruikers = count($gebruikers);
        if ($countGebruikers === 0) {
            $io->success('Geen inactieve gebruikers gevonden welke moeten worden gedeactiveerd');
            return Command::SUCCESS;
        }

        $io->info('Er zijn ' . count($gebruikers) . ' gebruikers gevonden welke inactief zijn en gedeactiveerd zullen worden');

        /** @var Gebruiker $gebruiker */
        foreach ($gebruikers as $gebruiker) {
            $this->deactiveerGebruiker($gebruiker);
        }
        $this->em->flush();

        $this->eventDispatcher->dispatch(
            ActionEvent::registerGebruikerAutomatischAangepast(
                ActionEvent::GEBRUIKER_DISABLED_SYSTEM,
                __CLASS__,
                count($gebruikers),
                0
            ),
            ActionEvent::NAME
        );

        $io->success('Commando succesvol uitgevoerd.');
        return Command::SUCCESS;
    }

    private function deactiveerGebruiker(Gebruiker $gebruiker): void
    {
        $gebruiker->setEnabled(false);
        $this->em->persist($gebruiker);

    }
}
