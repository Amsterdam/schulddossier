<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Exception;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierSyncedWithAllegroEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

#[AsCommand(
    name: 'app:allegro:sync:check',
    description: 'Commando om dossiers te synchroniseren met Allegro wanneer er een statuswijziging heeft plaatsgevonden',
)]
class SyncDossierWithAllegroCommand extends Command
{
    private $dossierRepository;

    public function __construct(
        EntityManagerInterface $em,
        private AllegroService $service,
        private AllegroCommandHelper $allegroCommandHelper,
        private EventDispatcherInterface $eventDispatcher
    )
    {
        $this->dossierRepository = $em->getRepository(Dossier::class);
        $this->service = $service;
        $this->allegroCommandHelper = $allegroCommandHelper;
        $this->eventDispatcher = $eventDispatcher;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('app:allegro:sync:check');
    }

    /**
     * @throws NonUniqueResultException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Running app:allegro:sync:check command.');

        $io->info('Looking up allegro credentials');

        /** @var Organisatie $allegroUser */
        $allegroUser = $this->allegroCommandHelper->getAllegroUserFromAnyOrg();

        if (!isset($allegroUser)) {
            $io->info('No organistation found whith a complete set of Allegro login data');
            $io->success('Job finished');

            return Command::SUCCESS;
        }

        $dossiers = $this->dossierRepository->findByAllegroNumberAndWithStatuses(['verzonden_shv', 'compleet_gka', 'dossier_gecontroleerd_gka']);

        try {
            $this->service->login($allegroUser);
        } catch (Exception $e) {
            $io->error('Could not login to Allegro: ' . $e->getMessage());

            return Command::FAILURE;
        }

        foreach ($dossiers as $dossier) {
            $header = null;

            try {
                $header = $this->service->getSRVAanvraagHeader($dossier->getOrganisatie(), $dossier->getAllegroNummer());
            } catch (Exception $e) {
                $io->error('Error: failed to fetch SRV Aanvraag Header. ' . $e->getMessage());
            }

            $dossierCanBeUpdatedWithAllegro = $this->service->isDossierInSyncWithAllegro($dossier, $header);

            if ($dossierCanBeUpdatedWithAllegro) {
                try {
                    $this->service->updateDossier($dossier, $header);
                } catch (Exception $e) {
                    $io->error('Error: could not update dossier. ' . $e->getMessage());
                }

                try {
                    $this->eventDispatcher->dispatch(new DossierSyncedWithAllegroEvent($dossier, $dossier->getMedewerkerOrganisatie()), DossierSyncedWithAllegroEvent::NAME);
                } catch (Exception $e) {
                    $io->error('Error: could not send e-mail notification. ' . $e->getMessage());
                }
            }

            $io->info('The dossier with ID ' . $dossier->getId() . ' ' . ($dossierCanBeUpdatedWithAllegro ? 'has' : 'has NOT') . ' been updated with new Allegro (' . $dossier->getAllegroNummer() . ') data.');
        }

        $io->success('Job completed successfully');

        return Command::SUCCESS;
    }
}
