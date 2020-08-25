<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TGezinsSituatie
{

    /**
     * @var string $BurgerlijkeStaat
     */
    protected $BurgerlijkeStaat = null;

    /**
     * @var string $GemeenschapVanGoederen
     */
    protected $GemeenschapVanGoederen = null;

    /**
     * @var string $GemeenschapVanGoederenDetail
     */
    protected $GemeenschapVanGoederenDetail = null;

    /**
     * @var string $Kinderen
     */
    protected $Kinderen = null;

    /**
     * @var \DateTime $BurgerlijkeStaatSinds
     */
    protected $BurgerlijkeStaatSinds = null;

    /**
     * @param string $BurgerlijkeStaat
     * @param string $GemeenschapVanGoederen
     * @param string $Kinderen
     * @param \DateTime $BurgerlijkeStaatSinds
     */
    public function __construct($BurgerlijkeStaat, $GemeenschapVanGoederen, $Kinderen, \DateTime $BurgerlijkeStaatSinds)
    {
      $this->BurgerlijkeStaat = $BurgerlijkeStaat;
      $this->GemeenschapVanGoederen = $GemeenschapVanGoederen;
      $this->Kinderen = $Kinderen;
      $this->BurgerlijkeStaatSinds = $BurgerlijkeStaatSinds->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie
     */
    public function setBurgerlijkeStaat($BurgerlijkeStaat)
    {
      $this->BurgerlijkeStaat = $BurgerlijkeStaat;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie
     */
    public function setGemeenschapVanGoederen($GemeenschapVanGoederen)
    {
      $this->GemeenschapVanGoederen = $GemeenschapVanGoederen;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie
     */
    public function setGemeenschapVanGoederenDetail($GemeenschapVanGoederenDetail)
    {
      $this->GemeenschapVanGoederenDetail = $GemeenschapVanGoederenDetail;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie
     */
    public function setKinderen($Kinderen)
    {
      $this->Kinderen = $Kinderen;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBurgerlijkeStaatSinds()
    {
      if ($this->BurgerlijkeStaatSinds == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BurgerlijkeStaatSinds);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BurgerlijkeStaatSinds
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie
     */
    public function setBurgerlijkeStaatSinds(\DateTime $BurgerlijkeStaatSinds)
    {
      $this->BurgerlijkeStaatSinds = $BurgerlijkeStaatSinds->format(\DateTime::ATOM);
      return $this;
    }

}
