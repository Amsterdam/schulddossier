<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $origineleBestandsnaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=15, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=15)
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
     * @Assert\NotBlank
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

    public function getId()
    {
        return $this->id;
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

    public function setOrigineleExtensie($origineleExtensie)
    {
        $this->origineleExtensie = $origineleExtensie;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getUploader()
    {
        return $this->uploader;
    }

    public function setUploader($uploader)
    {
        $this->uploader = $uploader;
    }

    public function getUploadDatumTijd()
    {
        return $this->uploadDatumTijd;
    }

    public function setUploadDatumTijd($uploadDatumTijd)
    {
        $this->uploadDatumTijd = $uploadDatumTijd;
    }

    public function getMd5Hash()
    {
        return $this->md5Hash;
    }

    public function setMd5Hash($md5Hash)
    {
        $this->md5Hash = $md5Hash;
    }

    public function getGroep()
    {
        return $this->groep;
    }

    public function setGroep($groep)
    {
        $this->groep = $groep;
    }

    public function getDirectory()
    {
        return $this->directory;
    }

    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }

    public function getBestandsnaam()
    {
        return $this->bestandsnaam;
    }

    public function setBestandsnaam($bestandsnaam)
    {
        $this->bestandsnaam = $bestandsnaam;
    }

}