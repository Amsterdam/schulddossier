<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *  indexes={@ORM\Index(name="idx_dossier_timeline", columns={"dossier_id", "type", "subtype"})}
 * )
 */
class DossierTimeline
{
    const TYPE_OPERATION = 'operation';
    const TYPE_WORKFLOW = 'workflow';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier", inversedBy="timeline")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=false)
     */
    private $dossier;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $datumtijd;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id", nullable=true)
     */
    private $gebruiker;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=125, nullable=true)
     */
    private $subtype;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $omschrijving;

    /**
     * @var array
     * @ORM\Column(type="json", nullable=true)
     */
    private $data;

    public function getId()
    {
        return $this->id;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function setDossier(Dossier $dossier)
    {
        $this->dossier = $dossier;
        if ($dossier->hasTimeline($this) === false) {
            $dossier->addTimeline($this);
        }
    }

    public function getDatumtijd()
    {
        return $this->datumtijd;
    }

    public function setDatumtijd($datumtijd)
    {
        $this->datumtijd = $datumtijd;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }

    public function setGebruiker(Gebruiker $gebruiker)
    {
        $this->gebruiker = $gebruiker;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getSubtype()
    {
        return $this->subtype;
    }

    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
    }

    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }


}