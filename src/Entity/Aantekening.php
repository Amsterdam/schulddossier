<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use GemeenteAmsterdam\FixxxSchuldhulp\Traits\ExportAble;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table]
#[ORM\Entity]
class Aantekening
{
    use ExportAble;
    /**
     * @var integer
     */
    #[ORM\Id]
    #[ORM\Column(type: 'bigint', nullable: false)]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var Dossier
     */
    #[ORM\JoinColumn(name: 'dossier_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: \Dossier::class, inversedBy: 'aantekeningen')]
    private $dossier;

    /**
     * @var string
     */
    #[ORM\Column(length: 255, nullable: false)]
    private $onderwerp;

    /**
     * @var SchuldItem
     */
    #[ORM\JoinColumn(name: 'schuld_item_id', referencedColumnName: 'id', nullable: true)]
    #[ORM\ManyToOne(targetEntity: \SchuldItem::class, inversedBy: 'aantekeningen')]
    private $schuldItem;

    /**
     * @var DateTime
     */
    #[ORM\Column(type: 'datetime', nullable: false)]
    private $datumTijd;

    /**
     * @var Gebruiker
     */
    #[ORM\JoinColumn(name: 'gebruiker_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: \Gebruiker::class)]
    private $gebruiker;

    /**
     * @var string
     */
    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(min: 1, max: 20480)]
    #[Assert\NotBlank]
    private $tekst;

    public function __construct()
    {
        $this->datumTijd = new DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function getOnderwerp()
    {
        return $this->onderwerp;
    }

    public function getSchuldItem()
    {
        return $this->schuldItem;
    }

    public function getDatumTijd()
    {
        return $this->datumTijd;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }

    public function getTekst()
    {
        return $this->tekst;
    }

    public function setDossier(Dossier $dossier)
    {
        $this->dossier = $dossier;
        if ($dossier->hasAantekening($this) === false) {
            $dossier->addAantekening($this);
        }
    }

    public function setSchuldItem(SchuldItem $schuldItem)
    {
        $this->schuldItem = $schuldItem;
        if ($this->schuldItem->hasAantekening($this) === false) {
            $schuldItem->addAantekening($this);
        }
    }

    public function setOnderwerp($onderwerp)
    {
        $this->onderwerp = $onderwerp;
    }

    public function setGebruiker(Gebruiker $gebruiker)
    {
        $this->gebruiker = $gebruiker;
    }

    public function setTekst($tekst)
    {
        $this->tekst = $tekst;
    }
}
