<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\SchuldhulpbureauRepository")
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

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $allegroUsername;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $allegroPassword;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $allegroSessionId;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $allegroSessionAge;

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

    /**
     * @return string|null
     */
    public function getAllegroUsername(): ?string
    {
        return $this->allegroUsername;
    }

    /**
     * @param string|null $allegroUsername
     * @return Schuldhulpbureau
     */
    public function setAllegroUsername(?string $allegroUsername): Schuldhulpbureau
    {
        $this->allegroUsername = $allegroUsername;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllegroPassword(): ?string
    {
        return $this->allegroPassword;
    }

    /**
     * @param string|null $allegroPassword
     * @return Schuldhulpbureau
     */
    public function setAllegroPassword(?string $allegroPassword): Schuldhulpbureau
    {
        $this->allegroPassword = $allegroPassword;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllegroSessionId(): ?string
    {
        return $this->allegroSessionId;
    }

    /**
     * @param string|null $allegroSessionId
     * @return Schuldhulpbureau
     */
    public function setAllegroSessionId(?string $allegroSessionId): Schuldhulpbureau
    {
        $this->allegroSessionId = $allegroSessionId;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getAllegroSessionAge(): ?\DateTime
    {
        return $this->allegroSessionAge;
    }

    /**
     * @param \DateTime|null $allegroSessionAge
     * @return Schuldhulpbureau
     */
    public function setAllegroSessionAge(?\DateTime $allegroSessionAge): Schuldhulpbureau
    {
        $this->allegroSessionAge = $allegroSessionAge;

        return $this;
    }
}
