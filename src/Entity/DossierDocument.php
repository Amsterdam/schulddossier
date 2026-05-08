<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table]
#[ORM\Entity]
class DossierDocument
{
    /**
     * @var integer
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer', nullable: false)]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var Dossier
     */
    #[ORM\JoinColumn(name: 'dossier_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: \Dossier::class, inversedBy: 'documenten')]
    private $dossier;

    /**
     * @var Document
     */
    #[ORM\JoinColumn(name: 'document_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    #[ORM\ManyToOne(targetEntity: \Document::class, cascade: ['persist'], fetch: 'EAGER')]
    #[Assert\Valid]
    private $document;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    #[Assert\NotBlank]
    private $onderwerp;

    /**
     * @var SchuldItem
     */
    #[ORM\JoinColumn(name: 'schuld_item_id', referencedColumnName: 'id', nullable: true)]
    #[ORM\ManyToOne(targetEntity: \SchuldItem::class, inversedBy: 'dossierDocumenten')]
    private $schuldItem;

    public function getId()
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
     * @return Document
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

    public function getSchuldItem()
    {
        return $this->schuldItem;
    }

    public function setSchuldItem(?SchuldItem $schuldItem = null)
    {
        if ($this->schuldItem !== $schuldItem) {
            $this->schuldItem = $schuldItem;
        }
        if ($schuldItem->hasDossierDocument($this) === false) {
            $schuldItem->addDossierDocumenten($this);
        }
    }
}