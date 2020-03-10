<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
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
        $bureauRepo = $this->em->getRepository(Schuldhulpbureau::class);
        $bureau = $bureauRepo->fetchAllegroUser();
        if (null === $bureau) {
            $output->write('No allegro credentials found');
            return;
        }
        $statistics = $this->service->syncSchuldeisers($bureau, '');
        var_dump($statistics);
    }
}
