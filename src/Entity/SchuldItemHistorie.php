<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Schulditem;
use Dossier;
use Gebruiker;
use Schuldeiser;
use DossierDocument;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/*/*
 * @ORM\Entity
 * @ORM\Table
 */
class SchuldItemHistorie
{
    /**
     * @var integer
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer', nullable: false)]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var SchuldItem
     */
    #[ORM\JoinColumn(name: 'schuld_item_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: Schulditem::class, inversedBy: 'historie')]
    private $schuldItem;

    /**
     * @var Dossier
     */
    #[ORM\JoinColumn(name: 'dossier_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: Dossier::class, inversedBy: 'schuldItems')]
    private $dossier;

    /**
     * @var Gebruiker
     */
    #[ORM\JoinColumn(name: 'aanmaker_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: Gebruiker::class)]
    private $aanmaker;

    /**
     * @var DateTime
     */
    #[ORM\Column(type: 'datetime', nullable: false)]
    private $aanmaakDatumTijd;

    /**
     * @var Gebruiker
     */
    #[ORM\JoinColumn(name: 'aanmaker_id', referencedColumnName: 'id', nullable: false)]
    #[ORM\ManyToOne(targetEntity: Gebruiker::class)]
    private $bewerker;

    /**
     * @var DateTime
     */
    #[ORM\Column(type: 'datetime', nullable: false)]
    private $bewerkDatumTijd;

    /**
     * @var boolean
     */
    #[ORM\Column(type: 'boolean', nullable: false)]
    private $verwijderd;

    /**
     * @var Schuldeiser
     */
    #[ORM\JoinColumn(name: 'schuldeiser_id', referencedColumnName: 'id')]
    #[ORM\ManyToOne(targetEntity: Schuldeiser::class, inversedBy: 'schuldItems', cascade: ['persist'])]
    #[Assert\NotBlank]
    private $schuldeiser;

    /**
     * @var Schuldeiser
     */
    #[ORM\JoinColumn(name: 'schuldeiser_id', referencedColumnName: 'id')]
    #[ORM\ManyToOne(targetEntity: Schuldeiser::class, inversedBy: 'schuldItems', cascade: ['persist'])]
    private $incassant;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 1, max: 255)]
    private $referentie;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 15, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['concurrent', 'preferent'])]
    private $type;

    /**
     * @var float
     */
    #[ORM\Column(type: 'decimal', precision: 8, scale: 2, nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Type('numeric')]
    #[Assert\Range(min: -100000, max: 100000)]
    private $bedrag;

    /**
     * @var DateTime
     */
    #[ORM\Column(type: 'date', nullable: false)]
    #[Assert\NotBlank]
    private $vaststelDatum;

    /**
     * @var DossierDocument[]|ArrayCollection
     */
    #[ORM\OneToMany(targetEntity: DossierDocument::class, mappedBy: 'schuldItem')]
    #[ORM\OrderBy(['id' => 'ASC'])]
    private $dossierDocumenten;

    public function __construct()
    {
        $this->type = self::TYPE_CONCURRENT;
        $this->dossierDocumenten = new ArrayCollection();
        $this->aanmaakDatumTijd = new DateTime();
        $this->bewerkDatumTijd = new DateTime();
        $this->vaststelDatum = new DateTime();
        $this->verwijderd = false;
    }
}