<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use GemeenteAmsterdam\FixxxSchuldhulp\Repository\OrganisatieRepository;
use Gebruiker;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table]
#[ORM\Entity(repositoryClass: OrganisatieRepository::class)]
class Organisatie
{
    /**
     * @var integer
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer', nullable: false)]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 125, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 1, max: 125)]
    private $naam;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Email]
    #[Assert\Length(min: 0, max: 255)]
    private $emailAdresControle;

    /**
     * @var Team
     */
    #[ORM\JoinColumn(name: 'team_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    #[ORM\ManyToOne(targetEntity: \Team::class)]
    private $standaardGkaTeam;

    /**
     * @var Gebruiker[]|ArrayCollection
     */
    #[ORM\ManyToMany(targetEntity: Gebruiker::class, mappedBy: 'organisaties')]
    private $gebruikers;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(min: 0, max: 255)]
    private $allegroUsername;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(min: 0, max: 255)]
    private $allegroPassword;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $allegroSessionId;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(type: 'datetime', nullable: true)]
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
     * @return Organisatie
     */
    public function setAllegroUsername(?string $allegroUsername): Organisatie
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
     * @return Organisatie
     */
    public function setAllegroPassword(?string $allegroPassword): Organisatie
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
     * @return Organisatie
     */
    public function setAllegroSessionId(?string $allegroSessionId): Organisatie
    {
        $this->allegroSessionId = $allegroSessionId;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAllegroSessionAge(): ?DateTime
    {
        return $this->allegroSessionAge;
    }

    /**
     * @param DateTime|null $allegroSessionAge
     * @return Organisatie
     */
    public function setAllegroSessionAge(?DateTime $allegroSessionAge): Organisatie
    {
        $this->allegroSessionAge = $allegroSessionAge;

        return $this;
    }
}
