<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class ActionEvent
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="bigint", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(length=45, nullable=false)
     */
    private $ip;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id", nullable=false)
     */
    private $gebruiker;

    /**
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier", inversedBy="aantekeningen")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=true)
     */
    private $dossier;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="gewijzigde_gebruiker_id", referencedColumnName="id", nullable=true)
     */
    private $gewijzigdeGebruiker;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $datumTijd;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return Gebruiker
     */
    public function getGebruiker(): Gebruiker
    {
        return $this->gebruiker;
    }

    /**
     * @return Dossier
     */
    public function getDossier(): Dossier
    {
        return $this->dossier;
    }

    /**
     * @return Gebruiker
     */
    public function getGewijzigdeGebruiker(): Gebruiker
    {
        return $this->gewijzigdeGebruiker;
    }

    /**
     * @return \DateTime
     */
    public function getDatumTijd(): \DateTime
    {
        return $this->datumTijd;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @param Gebruiker $gebruiker
     */
    public function setGebruiker(Gebruiker $gebruiker): void
    {
        $this->gebruiker = $gebruiker;
    }

    /**
     * @param Dossier $dossier
     */
    public function setDossier(Dossier $dossier): void
    {
        $this->dossier = $dossier;
    }

    /**
     * @param Gebruiker $gewijzigdeGebruiker
     */
    public function setGewijzigdeGebruiker(Gebruiker $gewijzigdeGebruiker): void
    {
        $this->gewijzigdeGebruiker = $gewijzigdeGebruiker;
    }

    /**
     * @param \DateTime $datumTijd
     */
    public function setDatumTijd(\DateTime $datumTijd): void
    {
        $this->datumTijd = $datumTijd;
    }
}
