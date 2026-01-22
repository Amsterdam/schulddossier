<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Exception;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierSyncedWithAllegroEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Psr\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Security\Core\User\User;

#[AsCommand(
    name: 'app:allegro:sync:check',
    description: 'Commando om Dossiers te synchroniseren met hun tegenhanger in Allegro (GKA) en vervolgens te kijken of er een verschil is.',
)]
class SyncDossierWithAllegroCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * @var AllegroService
     */
    private AllegroService $service;

    public function __construct(
        EntityManagerInterface $em,
        AllegroService $service,
        private readonly EventDispatcherInterface $eventDispatcher,
    )
    {
        $this->em = $em;
        $this->service = $service;
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

        /** @var OrganisatieRepository $organisatieRepository */
        $organisatieRepository = $this->em->getRepository(Organisatie::class);

        /** @var Organisatie $allegroId */
        $allegroId = $organisatieRepository->fetchAllegroUser();

        if (!isset($allegroId)) {
            $io->info('No organistation found whith a complete set of Allegro login data');
            $io->success('Job finished');

            return Command::SUCCESS;
        }

        $dossierRepository = $this->em->getRepository(Dossier::class);

        $dossiers = $dossierRepository->findBy([
            'status' => ['verzonden_shv', 'compleet_gka', 'dossier_gecontroleerd_gka'],
        ]);

        // Filter dossiers with non-null allegroNummer
        $dossiers = array_filter($dossiers, function ($dossier) {
            return $dossier->getAllegroNummer() !== null;
        });

        try {
            // TODO: re-enable login when Allegro FT is back online.
            // if ($allegroId && !$this->service->login($allegroId)) {
            //     $io->error('Could not login with Allegro credentials belonging to Organisation id ' . $allegroId->getId());

            //     return Command::FAILURE;
            // }

            foreach ($dossiers as $dossier) {
                $dossierCanBeUpdatedWithAllegro = $this->service->isDossierInSyncWithAllegro($dossier);

                $this->eventDispatcher->dispatch(new DossierSyncedWithAllegroEvent($dossier, new Gebruiker()));

                $io->info('Dossier ID: ' . $dossier->getId() . ' | Allegro Nummer: ' . $dossier->getAllegroNummer() . ' | Allegro Status: ' . $dossier->getAllegroStatus() . ' | Allegro Extra Status: ' . $dossier->getAllegroExtraStatus());
                $io->info('The dossier with ID ' . $dossier->getId() . ' ' . ($dossierCanBeUpdatedWithAllegro ? 'has' : 'has NOT') . ' been updated with new Allegro data.');
            }

            $io->success('Job completed successfully');

            return Command::SUCCESS;
        } catch (Exception $e) {
            $io->error('Error with the following message occurred: ' . $e->getMessage());

            return Command::FAILURE;
        }
    }
}
