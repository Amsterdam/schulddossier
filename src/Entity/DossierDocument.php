<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class DossierDocument
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier", inversedBy="documenten")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=false)
     */
    private $dossier;

    /**
     * @var Document
     * @ORM\ManyToOne(targetEntity="Document", cascade={"persist"}, fetch="EAGER")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id", nullable=false)
     */
    private $document;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $onderwerp;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function getOnderwerp()
    {
        return $this->onderwerp;
    }

    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    public function setDossier(Dossier $dossier)
    {
        $this->dossier = $dossier;
        if ($dossier->hasDocument($this) === false) {
            $dossier->addDocument($this);
        }
    }

    public function setOnderwerp($onderwerp)
    {
        $this->onderwerp = $onderwerp;
    }
}