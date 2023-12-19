<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureStorage;
use AzureOSS\Storage\Blob\BlobRestProxy;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class TestAzureBlobAccess extends Command
{

    public function __construct(
        private EntityManagerInterface $em,
        private AllegroService $service,
        private AzureStorage $storage
    )
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:test-azure-storage');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $file = new UploadedFile('/var/www/assets/images/envelop.svg', 'envelop.svg');
        $destinationPath = 'folder/test/';

        $urlWithSas = $this->storage->storeFile($file, $destinationPath);
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Uploaded file: ' . $file->getClientOriginalName());
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Uploaded to path: ' . $destinationPath);
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Access URL found below');
        $io->info($urlWithSas);
        return Command::SUCCESS;

    }
}
