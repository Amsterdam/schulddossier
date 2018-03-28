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

    public function __toString()
    {
        return $this->bedrijfsnaam;
    }
}
