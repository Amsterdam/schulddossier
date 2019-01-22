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
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=true)
     */
    private $dossier;

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
     * @var array
     * @ORM\Column(type="json", nullable=true)
     */
    private $data;

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
     * @return Dossier
     */
    public function getDossier()
    {
        return $this->dossier;
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
     * @return \DateTime
     */
    public function getDatumTijd(): \DateTime
    {
        return $this->datumTijd;
    }

    /**
     * @return array
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param Dossier $dossierId
     */
    public function setDossier(?Dossier $dossier)
    {
        $this->dossier = $dossier;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
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
     * @param \DateTime $datumTijd
     */
    public function setDatumTijd(\DateTime $datumTijd): void
    {
        $this->datumTijd = $datumTijd;
    }
}
