<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ImportSchuldeisersAllegroCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var AllegroService
     */
    private $service;

    public function __construct(EntityManagerInterface $em, AllegroService $service)
    {
        $this->em = $em;
        $this->service = $service;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:allegro:import:schuldeisers');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Looking up allegro credentials');
        $organisatieRepository = $this->em->getRepository(Organisatie::class);
        $allegroId = $organisatieRepository->fetchAllegroUser();
        if (null === $allegroId) {
            $output->write('No allegro credentials found');
            return;
        }
        $statistics = $this->service->syncSchuldeisers($allegroId, '');
        var_dump($statistics);
    }
}
