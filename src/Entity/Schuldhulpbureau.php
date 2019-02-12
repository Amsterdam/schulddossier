<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Schuldhulpbureau
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
     * @ORM\Column(type="string", length=125, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=125)
     */
    private $naam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Email
     * @Assert\Length(min=0, max=255)
     */
    private $emailAdresControle;

    /**
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $standaardGkaTeam;

    /**
     * @var Gebruiker[]|ArrayCollection
     * @ORM\ManyToMany(targetEntity="Gebruiker", mappedBy="schuldhulpbureaus")
     */
    private $gebruikers;

    public function __construct()
    {
        $this->gebruikers = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function getEmailAdresControle()
    {
        return $this->emailAdresControle;
    }

    public function setEmailAdresControle($emailAdresControle)
    {
        $this->emailAdresControle = $emailAdresControle;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->naam;
    }

    public function getStandaardGkaTeam(): ?Team
    {
        return $this->standaardGkaTeam;
    }

    public function setStandaardGkaTeam(?Team $standaardGkaTeam): self
    {
        $this->standaardGkaTeam = $standaardGkaTeam;

        return $this;
    }

    public function getGebruikers()
    {
        return $this->gebruikers;
    }
}
