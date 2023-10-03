<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ImportSchuldeisersAllegroCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * @var AllegroService
     */
    private AllegroService $service;

    public function __construct(EntityManagerInterface $em, AllegroService $service)
    {
        $this->em = $em;
        $this->service = $service;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setName('app:allegro:import:schuldeisers');
    }

    /**
     * @throws NonUniqueResultException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title(
            'Running app:allegro:import:schuldeisers'
        );
        $io->info('Looking up allegro credentials');

        /** @var OrganisatieRepository $organisatieRepository */
        $organisatieRepository = $this->em->getRepository(Organisatie::class);

        /** @var Organisatie $allegroId */
        $allegroId = $organisatieRepository->fetchAllegroUser();

        if (null === $allegroId) {
            $io->info('No organistation found whith a complete set of Allegro login data');
            $io->success('Job finished');
            return Command::SUCCESS;
        }

        try {
            if (!$this->service->login($allegroId)) {
                $io->error('Could not login with Allegro credentials belonging to Organisation id ' . $allegroId->getId());
                return Command::FAILURE;
            }

            $statistics = $this->service->syncSchuldeisers($allegroId);

            $io->table(
                ['Action', 'Value'],
                [
                    ['Created', $statistics['created']],
                    ['Updated', $statistics['updated']]
                ]
            );
            $io->success('Job completed successfully');

            return Command::SUCCESS;

        } catch (\Exception $e) {
            $io->error('Error with the following message occurred: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
