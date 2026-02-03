<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ElevateToAdminCommand extends Command
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
        $this->setName('app:gebruikers:make-admin')
            ->addArgument('email', InputArgument::REQUIRED, 'Which email address do you want to make an admin account?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('Trying to elevate the user with email address ' . $input->getArgument('email') . ' to admin');
        $userRepo = $this->em->getRepository(Gebruiker::class);
        /** @var Gebruiker $gebruiker */
        $gebruiker = $userRepo->findOneBy(['email' => strtolower($input->getArgument('email'))]);

        if ($gebruiker) {
            $gebruiker->setType(Gebruiker::TYPE_ADMIN);
            $this->em->persist($gebruiker);
            $this->em->flush($gebruiker);
        }

        $output->write('finished');
        return command::SUCCESS;
    }
}
