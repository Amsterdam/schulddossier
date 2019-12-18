<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TGezinsSituatie implements RequestInterface
{

    /**
     * @var string
     */
    private $BurgerlijkeStaat;

    /**
     * @var string
     */
    private $GemeenschapVanGoederen;

    /**
     * @var string
     */
    private $GemeenschapVanGoederenDetail;

    /**
     * @var string
     */
    private $Kinderen;

    /**
     * Constructor
     *
     * @var string $BurgerlijkeStaat
     * @var string $GemeenschapVanGoederen
     * @var string $GemeenschapVanGoederenDetail
     * @var string $Kinderen
     */
    public function __construct($BurgerlijkeStaat, $GemeenschapVanGoederen, $GemeenschapVanGoederenDetail, $Kinderen)
    {
        $this->BurgerlijkeStaat = $BurgerlijkeStaat;
        $this->GemeenschapVanGoederen = $GemeenschapVanGoederen;
        $this->GemeenschapVanGoederenDetail = $GemeenschapVanGoederenDetail;
        $this->Kinderen = $Kinderen;
    }

    /**
     * @return string
     */
    public function getBurgerlijkeStaat()
    {
        return $this->BurgerlijkeStaat;
    }

    /**
     * @param string $BurgerlijkeStaat
     * @return TGezinsSituatie
     */
    public function withBurgerlijkeStaat($BurgerlijkeStaat)
    {
        $new = clone $this;
        $new->BurgerlijkeStaat = $BurgerlijkeStaat;

        return $new;
    }

    /**
     * @return string
     */
    public function getGemeenschapVanGoederen()
    {
        return $this->GemeenschapVanGoederen;
    }

    /**
     * @param string $GemeenschapVanGoederen
     * @return TGezinsSituatie
     */
    public function withGemeenschapVanGoederen($GemeenschapVanGoederen)
    {
        $new = clone $this;
        $new->GemeenschapVanGoederen = $GemeenschapVanGoederen;

        return $new;
    }

    /**
     * @return string
     */
    public function getGemeenschapVanGoederenDetail()
    {
        return $this->GemeenschapVanGoederenDetail;
    }

    /**
     * @param string $GemeenschapVanGoederenDetail
     * @return TGezinsSituatie
     */
    public function withGemeenschapVanGoederenDetail($GemeenschapVanGoederenDetail)
    {
        $new = clone $this;
        $new->GemeenschapVanGoederenDetail = $GemeenschapVanGoederenDetail;

        return $new;
    }

    /**
     * @return string
     */
    public function getKinderen()
    {
        return $this->Kinderen;
    }

    /**
     * @param string $Kinderen
     * @return TGezinsSituatie
     */
    public function withKinderen($Kinderen)
    {
        $new = clone $this;
        $new->Kinderen = $Kinderen;

        return $new;
    }


}

