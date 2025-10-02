<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TGezinsSituatie implements RequestInterface
{
    /**
     * @var string
     */
    private string $BurgerlijkeStaat;

    /**
     * @var string
     */
    private string $GemeenschapVanGoederen;

    /**
     * @var null | string
     */
    private ?string $GemeenschapVanGoederenDetail = null;

    /**
     * @var string
     */
    private string $Kinderen;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $BurgerlijkeStaatSinds;

    /**
     * Constructor
     *
     * @param string $BurgerlijkeStaat
     * @param string $GemeenschapVanGoederen
     * @param null | string $GemeenschapVanGoederenDetail
     * @param string $Kinderen
     * @param \DateTimeInterface $BurgerlijkeStaatSinds
     */
    public function __construct(string $BurgerlijkeStaat, string $GemeenschapVanGoederen, ?string $GemeenschapVanGoederenDetail, string $Kinderen, \DateTimeInterface $BurgerlijkeStaatSinds)
    {
        $this->BurgerlijkeStaat = $BurgerlijkeStaat;
        $this->GemeenschapVanGoederen = $GemeenschapVanGoederen;
        $this->GemeenschapVanGoederenDetail = $GemeenschapVanGoederenDetail;
        $this->Kinderen = $Kinderen;
        $this->BurgerlijkeStaatSinds = $BurgerlijkeStaatSinds;
    }

    /**
     * @return string
     */
    public function getBurgerlijkeStaat() : string
    {
        return $this->BurgerlijkeStaat;
    }

    /**
     * @param string $BurgerlijkeStaat
     * @return static
     */
    public function withBurgerlijkeStaat(string $BurgerlijkeStaat) : static
    {
        $new = clone $this;
        $new->BurgerlijkeStaat = $BurgerlijkeStaat;

        return $new;
    }

    /**
     * @return string
     */
    public function getGemeenschapVanGoederen() : string
    {
        return $this->GemeenschapVanGoederen;
    }

    /**
     * @param string $GemeenschapVanGoederen
     * @return static
     */
    public function withGemeenschapVanGoederen(string $GemeenschapVanGoederen) : static
    {
        $new = clone $this;
        $new->GemeenschapVanGoederen = $GemeenschapVanGoederen;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGemeenschapVanGoederenDetail() : ?string
    {
        return $this->GemeenschapVanGoederenDetail;
    }

    /**
     * @param null | string $GemeenschapVanGoederenDetail
     * @return static
     */
    public function withGemeenschapVanGoederenDetail(?string $GemeenschapVanGoederenDetail) : static
    {
        $new = clone $this;
        $new->GemeenschapVanGoederenDetail = $GemeenschapVanGoederenDetail;

        return $new;
    }

    /**
     * @return string
     */
    public function getKinderen() : string
    {
        return $this->Kinderen;
    }

    /**
     * @param string $Kinderen
     * @return static
     */
    public function withKinderen(string $Kinderen) : static
    {
        $new = clone $this;
        $new->Kinderen = $Kinderen;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBurgerlijkeStaatSinds() : \DateTimeInterface
    {
        return $this->BurgerlijkeStaatSinds;
    }

    /**
     * @param \DateTimeInterface $BurgerlijkeStaatSinds
     * @return static
     */
    public function withBurgerlijkeStaatSinds(\DateTimeInterface $BurgerlijkeStaatSinds) : static
    {
        $new = clone $this;
        $new->BurgerlijkeStaatSinds = $BurgerlijkeStaatSinds;

        return $new;
    }
}

