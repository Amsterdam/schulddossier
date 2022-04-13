<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={
 *  @ORM\UniqueConstraint(name="uq_bestandsnaam", columns={"bestandsnaam"})
 * })
 */
class Thumbnail
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Document
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="thumbnails")
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id", nullable=false)
     */
    private $document;

    /**
     * @var string (binary)
     * Not mapped to database
     * @Assert\NotBlank
     */
    private $data;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $bestandsnaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=false)
     */
    private $sort;

    public function __construct()
    {
        $this->sort = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getBestandsnaam()
    {
        return $this->bestandsnaam;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function setDocument(Document $document = null)
    {
        if ($this->document !== $document) {
            $this->document = $document;
        }
        if ($document->getThumbnails()->contains($this) === false) {
            $document->addThumbnail($this);
        }
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setBestandsnaam($bestandsnaam)
    {
        $this->bestandsnaam = $bestandsnaam;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }
}