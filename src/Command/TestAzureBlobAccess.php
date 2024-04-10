<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use AzureOSS\Storage\Blob\BlobRestProxy;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureStorage;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use Symfony\Component\Console\Command\Command;
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
        $destinationPath = 'folder/test1/';

        $urlWithSas = $this->storage->storeFile($file, $destinationPath);
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Uploaded file: ' . $file->getClientOriginalName());
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Uploaded to path: ' . $destinationPath);
        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Access URL found below');
        $io->info($urlWithSas);

        $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Check file listing');
        $files = $this->storage->listFiles($destinationPath);
        $io->listing($files);

        if (!count($files)) {
            $io->error(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': No files found, which should not be possible at this stage');
            return Command::FAILURE;
        }

        if (count($files)) {
            $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': get FileContent of first file');
            $file = $files[0];
            $fileContent = $this->storage->getBlobContent($file);

            $io->info(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': File content below');
            $io->info($fileContent);
        }

        return Command::SUCCESS;

    }
}
