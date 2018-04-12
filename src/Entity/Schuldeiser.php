<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldeiserRepository")
 * @ORM\Table
 */
class Schuldeiser
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
    private $bedrijfsnaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     * @Assert\Iban
     */
    private $rekening;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $allegroCode;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\NotBlank
     */
    private $straat;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Length(min=0, max=25)
     * @Assert\NotBlank
     */
    private $huisnummer;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Length(min=0, max=25)
     */
    private $huisnummerToevoeging;

    /**
     * @var string
     * @ORM\Column(type="string", length=6, nullable=true)
     * @Assert\Length(min=0, max=6)
     * @Assert\NotBlank
     */
    private $postcode;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\NotBlank
     */
    private $plaats;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(min=0, max=2048)
     */
    private $opmerkingen;

    public function getId()
    {
        return $this->id;
    }

    public function getBedrijfsnaam()
    {
        return $this->bedrijfsnaam;
    }

    public function setBedrijfsnaam($bedrijfsnaam)
    {
        $this->bedrijfsnaam = $bedrijfsnaam;
    }

    public function getRekening()
    {
        return $this->rekening;
    }

    public function setRekening($rekening)
    {
        $this->rekening = $rekening;
    }

    public function getAllegroCode()
    {
        return $this->allegroCode;
    }

    public function setAllegroCode($allegroCode)
    {
        $this->allegroCode = $allegroCode;
    }

    public function getStraat()
    {
        return $this->straat;
    }

    public function setStraat($straat)
    {
        $this->straat = $straat;
    }

    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    public function setHuisnummer($huisnummer)
    {
        $this->huisnummer = $huisnummer;
    }

    public function getHuisnummerToevoeging()
    {
        return $this->huisnummerToevoeging;
    }

    public function setHuisnummerToevoeging($huisnummerToevoeging)
    {
        $this->huisnummerToevoeging = $huisnummerToevoeging;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function getPlaats()
    {
        return $this->plaats;
    }

    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;
    }

    public function getOpmerkingen()
    {
        return $this->opmerkingen;
    }

    public function setOpmerkingen($opmerkingen)
    {
        $this->opmerkingen = $opmerkingen;
    }

    public function __toString()
    {
        return $this->bedrijfsnaam;
    }
}
