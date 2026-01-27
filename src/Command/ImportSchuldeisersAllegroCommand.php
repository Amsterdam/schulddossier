<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\NonUniqueResultException;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ImportSchuldeisersAllegroCommand extends Command
{
    public function __construct(
        private AllegroService $service,
        private AllegroCommandHelper $allegroCommandHelper
    )
    {
        $this->service = $service;
        $this->allegroCommandHelper = $allegroCommandHelper;

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
        $io->title('Running app:allegro:import:schuldeisers');

        $io->info('Looking up allegro credentials');

        /** @var Organisatie $allegroUser */
        $allegroUser = $this->allegroCommandHelper->getAllegroIdFromAnyOrg();

        if (!isset($allegroUser)) {
            $io->info('No organistation found whith a complete set of Allegro login data');
            $io->success('Job finished');

            return Command::SUCCESS;
        }

        try {
            if (!$this->service->login($allegroUser)) {
                $io->error('Could not login with Allegro credentials belonging to Organisation id ' . $allegroUser->getId());

                return Command::FAILURE;
            }

            $statistics = $this->service->syncSchuldeisers($allegroUser);

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
