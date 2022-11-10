<?php
namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use League\Flysystem\Filesystem;

class FileStorageSelector
{
    /**
     * @var Filesystem
     */
    private $fileStorageDossier;

    /**
     * @var Filesystem
     */
    private $fileStorageThumbnail;

    /**
     * @param Filesystem $dossier
     */
    public function __construct(Filesystem $dossier, Filesystem $thumbnail)
    {
        $this->fileStorageDossier = $dossier;
        $this->fileStorageThumbnail = $thumbnail;
    }

    /**
     * @param string $groep
     * @throws \InvalidArgumentException
     * @return \League\Flysystem\Filesystem
     */
    public function getByGroep($groep)
    {
        switch ($groep)
        {
            case 'dossier':
                return $this->getFileStorageForDossier();
            case 'thumbnail':
                return $this->getFileStorageForThumbnail();
        }
        throw new \InvalidArgumentException('Unknown groep "' . $groep . '"');
    }

    /**
     * @return \League\Flysystem\Filesystem
     */
    public function getFileStorageForDossier()
    {
        return $this->fileStorageDossier;
    }

    /**
     * @return \League\Flysystem\Filesystem
     */
    public function getFileStorageForThumbnail()
    {
        return $this->fileStorageThumbnail;
    }
}