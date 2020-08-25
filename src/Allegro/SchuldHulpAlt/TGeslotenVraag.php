<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TGeslotenVraag
{

    /**
     * @var string $Vraag
     */
    protected $Vraag = null;

    /**
     * @var eJaNeeLeeg $Antwoord
     */
    protected $Antwoord = null;

    /**
     * @param string $Vraag
     * @param eJaNeeLeeg $Antwoord
     */
    public function __construct($Vraag, $Antwoord)
    {
      $this->Vraag = $Vraag;
      $this->Antwoord = $Antwoord;
    }

    /**
     * @return string
     */
    public function getVraag()
    {
      return $this->Vraag;
    }

    /**
     * @param string $Vraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGeslotenVraag
     */
    public function setVraag($Vraag)
    {
      $this->Vraag = $Vraag;
      return $this;
    }

    /**
     * @return eJaNeeLeeg
     */
    public function getAntwoord()
    {
      return $this->Antwoord;
    }

    /**
     * @param eJaNeeLeeg $Antwoord
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGeslotenVraag
     */
    public function setAntwoord($Antwoord)
    {
      $this->Antwoord = $Antwoord;
      return $this;
    }

}
