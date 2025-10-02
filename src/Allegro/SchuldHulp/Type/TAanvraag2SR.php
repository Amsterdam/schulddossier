<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;
use \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag;

class TAanvraag2SR extends TAanvraag implements RequestInterface
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
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder = null;

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
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden = null;

    /**
     * Constructor
     *
     * @param bool $NPS
     * @param null | string $OorzaakSchulden
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder
     * @param null | string $ToelichtingAlgemeen
     * @param null | string $ToelichtingSO
     * @param null | string $ToelichtingAanmelding
     * @param null | string $ToelichtingVoorstel
     * @param bool $TotaalschuldVullen
     * @param bool $OpdrachtgeverOvernemen
     * @param bool $HulpverlenerOvernemen
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden
     */
    public function __construct(bool $NPS, ?string $OorzaakSchulden, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder, ?string $ToelichtingAlgemeen, ?string $ToelichtingSO, ?string $ToelichtingAanmelding, ?string $ToelichtingVoorstel, bool $TotaalschuldVullen, bool $OpdrachtgeverOvernemen, bool $HulpverlenerOvernemen, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden)
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
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie
     */
    public function getBewindvoerder() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie
    {
        return $this->Bewindvoerder;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder
     * @return static
     */
    public function withBewindvoerder(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie $Bewindvoerder) : static
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
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray
     */
    public function getOpenVragen() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray
    {
        return $this->OpenVragen;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen
     * @return static
     */
    public function withOpenVragen(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray $OpenVragen) : static
    {
        $new = clone $this;
        $new->OpenVragen = $OpenVragen;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
     */
    public function getGeslotenVragen() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray
    {
        return $this->GeslotenVragen;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen
     * @return static
     */
    public function withGeslotenVragen(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray $GeslotenVragen) : static
    {
        $new = clone $this;
        $new->GeslotenVragen = $GeslotenVragen;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
     */
    public function getSchulden() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray
    {
        return $this->Schulden;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden
     * @return static
     */
    public function withSchulden(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray $Schulden) : static
    {
        $new = clone $this;
        $new->Schulden = $Schulden;

        return $new;
    }
}

