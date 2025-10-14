<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TAanvraagSR
{
    /**
     * @var int
     */
    private $Bedrijfscode;

    /**
     * @var bool
     */
    private $CorrespondentieWeb;

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
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
     */
    private $GeslotenVragen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
     */
    private $Schulden;

    /**
     * @return int
     */
    public function getBedrijfscode()
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return TAanvraagSR
     */
    public function withBedrijfscode($Bedrijfscode)
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieWeb()
    {
        return $this->CorrespondentieWeb;
    }

    /**
     * @param bool $CorrespondentieWeb
     * @return TAanvraagSR
     */
    public function withCorrespondentieWeb($CorrespondentieWeb)
    {
        $new = clone $this;
        $new->CorrespondentieWeb = $CorrespondentieWeb;

        return $new;
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
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
     * @return TAanvraagSR
     */
    public function withSchulden($Schulden)
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

