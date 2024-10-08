<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class LoadTeam7DataCommand extends Command
{
    private const SQL_TEMPLATE_FILE = '/var/www/20240731_schulddossier_template_data_only.sql';

    public function __construct(
        private readonly string $appEnv,
        private readonly EntityManagerInterface $em

    )
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:data:load-test-template');
    }

    public function isEnabled(): bool
    {
        // Dit commando is heel specifiek voor de dataset welke op dit moment op ACC staat.
        // Hierdoor is dit commando alleen beschikbaar op ACC
        if ($this->appEnv === 'acc') {
            return true;
        }

        return false;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Testdata laden voor Team 7');
        $this->application->getKernel()->getEnvironment();

        $file = fopen(self::SQL_TEMPLATE_FILE, "r");
        $pdo = $this->em->getConnection()->getNativeConnection();
        $statements = 0;

        if (!$file) {
            $io->error("File could not be read");
            return Command::FAILURE;
        }

        $pdo->beginTransaction();
        try {
            while (!feof($file)) {
                $line = fgets($file);
                $statement = $pdo->prepare($line);
                $statement->execute();
                $statements++;
            }
            $pdo->commit();
        } catch (\Exception $e) {
            $pdo->rollBack();
            $io->warning("Importeren van Team 7 test data geeft een foutmelding, de database is terug gezet naar de status toen dit commando begon.");
            $io->warning("Database foutmelding: {$e->getMessage()}");
            return Command::INVALID;
        }

        $io->success("Load complete");
        $io->success("Executed {$statements} statements");
        return command::SUCCESS;
    }
}
