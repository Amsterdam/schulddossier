<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={
 *  @ORM\UniqueConstraint(name="uq_file", columns={"groep", "directory", "bestandsnaam"})
 * })
 */
class Document
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var File
     * Not mapped to database
     * @Assert\NotBlank
     * @Assert\File
     */
    private $file;

    /**
     * @var string
     * Not mapped
     */
    private $mainTag;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $origineleBestandsnaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=15, nullable=false)
     */
    private $origineleExtensie;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $naam;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id", nullable=false)
     */
    private $uploader;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     * @Assert\NotBlank
     */
    private $uploadDatumTijd;

    /**
     * @var string
     * @ORM\Column(type="string", length=32, nullable=false)
     */
    private $md5Hash;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $groep;

    /**
     * @var string
     * @ORM\Column(type="string", length=1024, nullable=false)
     */
    private $directory;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $bestandsnaam;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $inPrullenbak;

    /**
     * @var Thumbnail[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="Thumbnail", mappedBy="document", cascade={"persist", "remove"})
     * @ORM\OrderBy({"sort"="ASC", "id"="ASC"})
     */
    private $thumbnails;

    public function __construct()
    {
        $this->inPrullenbak = false;
        $this->thumbnails = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\File
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getMainTag()
    {
        return $this->mainTag;
    }

    public function getOrigineleBestandsnaam()
    {
        return $this->origineleBestandsnaam;
    }

    public function setOrigineleBestandsnaam($origineleBestandsnaam)
    {
        $this->origineleBestandsnaam = $origineleBestandsnaam;
    }

    public function getOrigineleExtensie()
    {
        return $this->origineleExtensie;
    }

    /**
     * @return \DateTime
     */
    public function getUploadDatumTijd()
    {
        return $this->uploadDatumTijd;
    }

    public function getBestandsnaam()
    {
        return $this->bestandsnaam;
    }

    public function getDirectory()
    {
        return $this->directory;
    }

    public function getGroep()
    {
        return $this->groep;
    }

    public function getMd5Hash()
    {
        return $this->md5Hash;
    }

    public function getUploader()
    {
        return $this->uploader;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function isInPrullenbak()
    {
        return $this->inPrullenbak;
    }

    public function setOrigineleExtensie($origineleExtensie)
    {
        $this->origineleExtensie = $origineleExtensie;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function setUploader($uploader)
    {
        $this->uploader = $uploader;
    }

    public function setFile(File $file)
    {
        $this->file = $file;
    }

    public function setUploadDatumTijd($uploadDatumTijd)
    {
        $this->uploadDatumTijd = $uploadDatumTijd;
    }

    public function setMd5Hash($md5Hash)
    {
        $this->md5Hash = $md5Hash;
    }

    public function setGroep($groep)
    {
        $this->groep = $groep;
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    public function setBestandsnaam($bestandsnaam)
    {
        $this->bestandsnaam = $bestandsnaam;
    }

    public function setMainTag($mainTag)
    {
        $this->mainTag = $mainTag;
    }

    public function setInPrullenbak($inPrullenbak)
    {
        $this->inPrullenbak = $inPrullenbak;
    }

    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    public function addThumbnail(Thumbnail $thumbnail)
    {
        if ($this->thumbnails->contains($thumbnail) === false) {
            $this->thumbnails->add($thumbnail);
        }
        if ($thumbnail->getDocument() !== $this) {
            $thumbnail->setDocument($this);
        }
    }

    public function removeThumbnail(Thumbnail $thumbnail)
    {
        if ($this->thumbnails->contains($thumbnail) === true) {
            $this->thumbnails->removeElement($thumbnail);
        }
        if ($thumbnail->getDocument() === $this) {
            $thumbnail->setDocument(null);
        }
    }
}