<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanvraagSR extends TAanvraag
{
    /**
     * @var int
     */
    private int $Bedrijfscode;

    /**
     * @var bool
     */
    private bool $CorrespondentieWeb;

    /**
     * @var bool
     */
    private bool $NPS;

    /**
     * @var string
     */
    private string $OorzaakSchulden;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder;

    /**
     * @var string
     */
    private string $ToelichtingAlgemeen;

    /**
     * @var string
     */
    private string $ToelichtingSO;

    /**
     * @var string
     */
    private string $ToelichtingAanmelding;

    /**
     * @var string
     */
    private string $ToelichtingVoorstel;

    /**
     * @var bool
     */
    private bool $TotaalschuldVullen;

    /**
     * @var bool
     */
    private bool $OpdrachtgeverOvernemen;

    /**
     * @var bool
     */
    private bool $HulpverlenerOvernemen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden;

    /**
     * @return int
     */
    public function getBedrijfscode() : int
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return static
     */
    public function withBedrijfscode(int $Bedrijfscode) : static
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieWeb() : bool
    {
        return $this->CorrespondentieWeb;
    }

    /**
     * @param bool $CorrespondentieWeb
     * @return static
     */
    public function withCorrespondentieWeb(bool $CorrespondentieWeb) : static
    {
        $new = clone $this;
        $new->CorrespondentieWeb = $CorrespondentieWeb;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNPS() : bool
    {
        return $this->NPS;
    }

    /**
     * @param bool $NPS
     * @return static
     */
    public function withNPS(bool $NPS) : static
    {
        $new = clone $this;
        $new->NPS = $NPS;

        return $new;
    }

    /**
     * @return string
     */
    public function getOorzaakSchulden() : string
    {
        return $this->OorzaakSchulden;
    }

    /**
     * @param string $OorzaakSchulden
     * @return static
     */
    public function withOorzaakSchulden(string $OorzaakSchulden) : static
    {
        $new = clone $this;
        $new->OorzaakSchulden = $OorzaakSchulden;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    public function getBewindvoerder() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
    {
        return $this->Bewindvoerder;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder
     * @return static
     */
    public function withBewindvoerder(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder) : static
    {
        $new = clone $this;
        $new->Bewindvoerder = $Bewindvoerder;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingAlgemeen() : string
    {
        return $this->ToelichtingAlgemeen;
    }

    /**
     * @param string $ToelichtingAlgemeen
     * @return static
     */
    public function withToelichtingAlgemeen(string $ToelichtingAlgemeen) : static
    {
        $new = clone $this;
        $new->ToelichtingAlgemeen = $ToelichtingAlgemeen;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingSO() : string
    {
        return $this->ToelichtingSO;
    }

    /**
     * @param string $ToelichtingSO
     * @return static
     */
    public function withToelichtingSO(string $ToelichtingSO) : static
    {
        $new = clone $this;
        $new->ToelichtingSO = $ToelichtingSO;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingAanmelding() : string
    {
        return $this->ToelichtingAanmelding;
    }

    /**
     * @param string $ToelichtingAanmelding
     * @return static
     */
    public function withToelichtingAanmelding(string $ToelichtingAanmelding) : static
    {
        $new = clone $this;
        $new->ToelichtingAanmelding = $ToelichtingAanmelding;

        return $new;
    }

    /**
     * @return string
     */
    public function getToelichtingVoorstel() : string
    {
        return $this->ToelichtingVoorstel;
    }

    /**
     * @param string $ToelichtingVoorstel
     * @return static
     */
    public function withToelichtingVoorstel(string $ToelichtingVoorstel) : static
    {
        $new = clone $this;
        $new->ToelichtingVoorstel = $ToelichtingVoorstel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTotaalschuldVullen() : bool
    {
        return $this->TotaalschuldVullen;
    }

    /**
     * @param bool $TotaalschuldVullen
     * @return static
     */
    public function withTotaalschuldVullen(bool $TotaalschuldVullen) : static
    {
        $new = clone $this;
        $new->TotaalschuldVullen = $TotaalschuldVullen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOpdrachtgeverOvernemen() : bool
    {
        return $this->OpdrachtgeverOvernemen;
    }

    /**
     * @param bool $OpdrachtgeverOvernemen
     * @return static
     */
    public function withOpdrachtgeverOvernemen(bool $OpdrachtgeverOvernemen) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverOvernemen = $OpdrachtgeverOvernemen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHulpverlenerOvernemen() : bool
    {
        return $this->HulpverlenerOvernemen;
    }

    /**
     * @param bool $HulpverlenerOvernemen
     * @return static
     */
    public function withHulpverlenerOvernemen(bool $HulpverlenerOvernemen) : static
    {
        $new = clone $this;
        $new->HulpverlenerOvernemen = $HulpverlenerOvernemen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
     */
    public function getOpenVragen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
    {
        return $this->OpenVragen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen
     * @return static
     */
    public function withOpenVragen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen) : static
    {
        $new = clone $this;
        $new->OpenVragen = $OpenVragen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
     */
    public function getGeslotenVragen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
    {
        return $this->GeslotenVragen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen
     * @return static
     */
    public function withGeslotenVragen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen) : static
    {
        $new = clone $this;
        $new->GeslotenVragen = $GeslotenVragen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    public function getSchulden() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
    {
        return $this->Schulden;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden
     * @return static
     */
    public function withSchulden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden) : static
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

