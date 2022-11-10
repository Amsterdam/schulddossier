<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

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
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var SchuldItem
     * @ORM\ManyToOne(targetEntity="Schulditem", inversedBy="historie")
     * @ORM\JoinColumn(name="schuld_item_id", referencedColumnName="id", nullable=false)
     */
    private $schuldItem;

    /**
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier", inversedBy="schuldItems")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=false)
     */
    private $dossier;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="aanmaker_id", referencedColumnName="id", nullable=false)
     */
    private $aanmaker;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $aanmaakDatumTijd;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="aanmaker_id", referencedColumnName="id", nullable=false)
     */
    private $bewerker;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $bewerkDatumTijd;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $verwijderd;

    /**
     * @var Schuldeiser
     * @ORM\ManyToOne(targetEntity="Schuldeiser", inversedBy="schuldItems", cascade={"persist"})
     * @ORM\JoinColumn(name="schuldeiser_id", referencedColumnName="id")
     * @Assert\NotBlank
     */
    private $schuldeiser;

    /**
     * @var Schuldeiser
     * @ORM\ManyToOne(targetEntity="Schuldeiser", inversedBy="schuldItems", cascade={"persist"})
     * @ORM\JoinColumn(name="schuldeiser_id", referencedColumnName="id")
     */
    private $incassant;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $referentie;

    /**
     * @var string
     * @ORM\Column(type="string", length=15, nullable=false)
     * @Assert\NotBlank
     * @Assert\Choice(choices={"concurrent", "preferent"})
     */
    private $type;

    /**
     * @var float
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=true)
     * @Assert\NotBlank
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $bedrag;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=false)
     * @Assert\NotBlank
     */
    private $vaststelDatum;

    /**
     * @var DossierDocument[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="DossierDocument", mappedBy="schuldItem")
     * @ORM\OrderBy({"id"="ASC"})
     */
    private $dossierDocumenten;

    public function __construct()
    {
        $this->type = self::TYPE_CONCURRENT;
        $this->dossierDocumenten = new ArrayCollection();
        $this->aanmaakDatumTijd = new \DateTime();
        $this->bewerkDatumTijd = new \DateTime();
        $this->vaststelDatum = new \DateTime();
        $this->verwijderd = false;
    }
}