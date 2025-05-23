<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use InvalidArgumentException;
use League\Flysystem\Filesystem;

class FileStorageSelector
{
    /**
     * @var Filesystem
     */
    private $fileStorageDossier;


    /**
     * @param Filesystem $dossier
     */
    public function __construct(Filesystem $dossier)
    {
        $this->fileStorageDossier = $dossier;
    }

    /**
     * @param string $groep
     * @throws InvalidArgumentException
     * @return Filesystem
     */
    public function getByGroep($groep)
    {
        switch ($groep)
        {
            case 'dossier':
                return $this->getFileStorageForDossier();
        }
        throw new InvalidArgumentException('Unknown groep "' . $groep . '"');
    }

    /**
     * @return Filesystem
     */
    public function getFileStorageForDossier()
    {
        return $this->fileStorageDossier;
    }
}