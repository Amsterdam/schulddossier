<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanvraag2SR extends TAanvraag2
{
    /**
     * @var bool
     */
    private bool $NPS;

    /**
     * @var null | string
     */
    private ?string $OorzaakSchulden = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder = null;

    /**
     * @var null | string
     */
    private ?string $ToelichtingAlgemeen = null;

    /**
     * @var null | string
     */
    private ?string $ToelichtingSO = null;

    /**
     * @var null | string
     */
    private ?string $ToelichtingAanmelding = null;

    /**
     * @var null | string
     */
    private ?string $ToelichtingVoorstel = null;

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
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden = null;

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
     * @return null | string
     */
    public function getOorzaakSchulden() : ?string
    {
        return $this->OorzaakSchulden;
    }

    /**
     * @param null | string $OorzaakSchulden
     * @return static
     */
    public function withOorzaakSchulden(?string $OorzaakSchulden) : static
    {
        $new = clone $this;
        $new->OorzaakSchulden = $OorzaakSchulden;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
     */
    public function getBewindvoerder() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie
    {
        return $this->Bewindvoerder;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder
     * @return static
     */
    public function withBewindvoerder(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie $Bewindvoerder) : static
    {
        $new = clone $this;
        $new->Bewindvoerder = $Bewindvoerder;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichtingAlgemeen() : ?string
    {
        return $this->ToelichtingAlgemeen;
    }

    /**
     * @param null | string $ToelichtingAlgemeen
     * @return static
     */
    public function withToelichtingAlgemeen(?string $ToelichtingAlgemeen) : static
    {
        $new = clone $this;
        $new->ToelichtingAlgemeen = $ToelichtingAlgemeen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichtingSO() : ?string
    {
        return $this->ToelichtingSO;
    }

    /**
     * @param null | string $ToelichtingSO
     * @return static
     */
    public function withToelichtingSO(?string $ToelichtingSO) : static
    {
        $new = clone $this;
        $new->ToelichtingSO = $ToelichtingSO;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichtingAanmelding() : ?string
    {
        return $this->ToelichtingAanmelding;
    }

    /**
     * @param null | string $ToelichtingAanmelding
     * @return static
     */
    public function withToelichtingAanmelding(?string $ToelichtingAanmelding) : static
    {
        $new = clone $this;
        $new->ToelichtingAanmelding = $ToelichtingAanmelding;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToelichtingVoorstel() : ?string
    {
        return $this->ToelichtingVoorstel;
    }

    /**
     * @param null | string $ToelichtingVoorstel
     * @return static
     */
    public function withToelichtingVoorstel(?string $ToelichtingVoorstel) : static
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
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
     */
    public function getOpenVragen() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray
    {
        return $this->OpenVragen;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen
     * @return static
     */
    public function withOpenVragen(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpenVraagArray $OpenVragen) : static
    {
        $new = clone $this;
        $new->OpenVragen = $OpenVragen;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
     */
    public function getGeslotenVragen() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray
    {
        return $this->GeslotenVragen;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen
     * @return static
     */
    public function withGeslotenVragen(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\GeslotenVraagArray $GeslotenVragen) : static
    {
        $new = clone $this;
        $new->GeslotenVragen = $GeslotenVragen;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
     */
    public function getSchulden() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray
    {
        return $this->Schulden;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden
     * @return static
     */
    public function withSchulden(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray $Schulden) : static
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

