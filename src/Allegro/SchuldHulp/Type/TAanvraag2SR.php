<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;
use \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag;

class TAanvraag2SR extends \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag implements RequestInterface
{

    /**
     * @var bool
     */
    private $NPS;

    /**
     * @var string
     */
    private $OorzaakSchulden;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie
     */
    private $Bewindvoerder;

    /**
     * @var string
     */
    private $ToelichtingAlgemeen;

    /**
     * @var string
     */
    private $ToelichtingSO;

    /**
     * @var string
     */
    private $ToelichtingAanmelding;

    /**
     * @var string
     */
    private $ToelichtingVoorstel;

    /**
     * @var bool
     */
    private $TotaalschuldVullen;

    /**
     * @var bool
     */
    private $OpdrachtgeverOvernemen;

    /**
     * @var bool
     */
    private $HulpverlenerOvernemen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray
     */
    private $OpenVragen;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
     */
    private $GeslotenVragen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
     */
    private $Schulden;

    /**
     * Constructor
     *
     * @var bool $NPS
     * @var string $OorzaakSchulden
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder
     * @var string $ToelichtingAlgemeen
     * @var string $ToelichtingSO
     * @var string $ToelichtingAanmelding
     * @var string $ToelichtingVoorstel
     * @var bool $TotaalschuldVullen
     * @var bool $OpdrachtgeverOvernemen
     * @var bool $HulpverlenerOvernemen
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden
     */
    public function __construct($NPS, $OorzaakSchulden, $Bewindvoerder, $ToelichtingAlgemeen, $ToelichtingSO, $ToelichtingAanmelding, $ToelichtingVoorstel, $TotaalschuldVullen, $OpdrachtgeverOvernemen, $HulpverlenerOvernemen, $OpenVragen, $GeslotenVragen, $Schulden)
    {
        $this->NPS = $NPS;
        $this->OorzaakSchulden = $OorzaakSchulden;
        $this->Bewindvoerder = $Bewindvoerder;
        $this->ToelichtingAlgemeen = $ToelichtingAlgemeen;
        $this->ToelichtingSO = $ToelichtingSO;
        $this->ToelichtingAanmelding = $ToelichtingAanmelding;
        $this->ToelichtingVoorstel = $ToelichtingVoorstel;
        $this->TotaalschuldVullen = $TotaalschuldVullen;
        $this->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;
        $this->HulpverlenerOvernemen = $HulpverlenerOvernemen;
        $this->OpenVragen = $OpenVragen;
        $this->GeslotenVragen = $GeslotenVragen;
        $this->Schulden = $Schulden;
    }

    /**
     * @return bool
     */
    public function getNPS()
    {
        return $this->NPS;
    }

    /**
     * @param bool $NPS
     * @return TAanvraag2SR
     */
    public function withNPS($NPS)
    {
        $new = clone $this;
        $new->NPS = $NPS;

        return $new;
    }

    /**
     * @return string
     */
    public function getOorzaakSchulden()
    {
        return $this->OorzaakSchulden;
    }

    /**
     * @param string $OorzaakSchulden
     * @return TAanvraag2SR
     */
    public function withOorzaakSchulden($OorzaakSchulden)
    {
        $new = clone $this;
        $new->OorzaakSchulden = $OorzaakSchulden;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie
     */
    public function getBewindvoerder()
    {
        return $this->Bewindvoerder;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder
     * @return TAanvraag2SR
     */
    public function withBewindvoerder($Bewindvoerder)
    {
        $new = clone $this;
        $new->Bewindvoerder = $Bewindvoerder;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingAlgemeen()
    {
        return $this->ToelichtingAlgemeen;
    }

    /**
     * @param string $ToelichtingAlgemeen
     * @return TAanvraag2SR
     */
    public function withToelichtingAlgemeen($ToelichtingAlgemeen)
    {
        $new = clone $this;
        $new->ToelichtingAlgemeen = $ToelichtingAlgemeen;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingSO()
    {
        return $this->ToelichtingSO;
    }

    /**
     * @param string $ToelichtingSO
     * @return TAanvraag2SR
     */
    public function withToelichtingSO($ToelichtingSO)
    {
        $new = clone $this;
        $new->ToelichtingSO = $ToelichtingSO;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingAanmelding()
    {
        return $this->ToelichtingAanmelding;
    }

    /**
     * @param string $ToelichtingAanmelding
     * @return TAanvraag2SR
     */
    public function withToelichtingAanmelding($ToelichtingAanmelding)
    {
        $new = clone $this;
        $new->ToelichtingAanmelding = $ToelichtingAanmelding;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingVoorstel()
    {
        return $this->ToelichtingVoorstel;
    }

    /**
     * @param string $ToelichtingVoorstel
     * @return TAanvraag2SR
     */
    public function withToelichtingVoorstel($ToelichtingVoorstel)
    {
        $new = clone $this;
        $new->ToelichtingVoorstel = $ToelichtingVoorstel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTotaalschuldVullen()
    {
        return $this->TotaalschuldVullen;
    }

    /**
     * @param bool $TotaalschuldVullen
     * @return TAanvraag2SR
     */
    public function withTotaalschuldVullen($TotaalschuldVullen)
    {
        $new = clone $this;
        $new->TotaalschuldVullen = $TotaalschuldVullen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOpdrachtgeverOvernemen()
    {
        return $this->OpdrachtgeverOvernemen;
    }

    /**
     * @param bool $OpdrachtgeverOvernemen
     * @return TAanvraag2SR
     */
    public function withOpdrachtgeverOvernemen($OpdrachtgeverOvernemen)
    {
        $new = clone $this;
        $new->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHulpverlenerOvernemen()
    {
        return $this->HulpverlenerOvernemen;
    }

    /**
     * @param bool $HulpverlenerOvernemen
     * @return TAanvraag2SR
     */
    public function withHulpverlenerOvernemen($HulpverlenerOvernemen)
    {
        $new = clone $this;
        $new->HulpverlenerOvernemen = $HulpverlenerOvernemen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray
     */
    public function getOpenVragen()
    {
        return $this->OpenVragen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen
     * @return TAanvraag2SR
     */
    public function withOpenVragen($OpenVragen)
    {
        $new = clone $this;
        $new->OpenVragen = $OpenVragen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
     */
    public function getGeslotenVragen()
    {
        return $this->GeslotenVragen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen
     * @return TAanvraag2SR
     */
    public function withGeslotenVragen($GeslotenVragen)
    {
        $new = clone $this;
        $new->GeslotenVragen = $GeslotenVragen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
     */
    public function getSchulden()
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden
     * @return TAanvraag2SR
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }


}

