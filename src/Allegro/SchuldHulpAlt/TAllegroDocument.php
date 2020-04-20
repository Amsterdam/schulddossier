<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAllegroDocument
{

    /**
     * @var TDocumentSleutel $DocumentSleutel
     */
    protected $DocumentSleutel = null;

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Activiteit
     */
    protected $Activiteit = null;

    /**
     * @var string $SoortActiviteit
     */
    protected $SoortActiviteit = null;

    /**
     * @var string $Onderwerp
     */
    protected $Onderwerp = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @param TDocumentSleutel $DocumentSleutel
     * @param int $Relatiecode
     * @param int $Activiteit
     * @param string $SoortActiviteit
     * @param string $Onderwerp
     * @param string $Omschrijving
     */
    public function __construct($DocumentSleutel, $Relatiecode, $Activiteit, $SoortActiviteit, $Onderwerp, $Omschrijving)
    {
      $this->DocumentSleutel = $DocumentSleutel;
      $this->Relatiecode = $Relatiecode;
      $this->Activiteit = $Activiteit;
      $this->SoortActiviteit = $SoortActiviteit;
      $this->Onderwerp = $Onderwerp;
      $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return TDocumentSleutel
     */
    public function getDocumentSleutel()
    {
      return $this->DocumentSleutel;
    }

    /**
     * @param TDocumentSleutel $DocumentSleutel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setDocumentSleutel($DocumentSleutel)
    {
      $this->DocumentSleutel = $DocumentSleutel;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
      return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
    }

    /**
     * @return int
     */
    public function getActiviteit()
    {
      return $this->Activiteit;
    }

    /**
     * @param int $Activiteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setActiviteit($Activiteit)
    {
      $this->Activiteit = $Activiteit;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoortActiviteit()
    {
      return $this->SoortActiviteit;
    }

    /**
     * @param string $SoortActiviteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setSoortActiviteit($SoortActiviteit)
    {
      $this->SoortActiviteit = $SoortActiviteit;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
      return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setOnderwerp($Onderwerp)
    {
      $this->Onderwerp = $Onderwerp;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
      return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAllegroDocument
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

}
