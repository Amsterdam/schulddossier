<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TJaNeeVraag
{

    /**
     * @var string $Vraag
     */
    protected $Vraag = null;

    /**
     * @var boolean $Antwoord
     */
    protected $Antwoord = null;

    /**
     * @param string $Vraag
     * @param boolean $Antwoord
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TJaNeeVraag
     */
    public function setVraag($Vraag)
    {
      $this->Vraag = $Vraag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAntwoord()
    {
      return $this->Antwoord;
    }

    /**
     * @param boolean $Antwoord
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TJaNeeVraag
     */
    public function setAntwoord($Antwoord)
    {
      $this->Antwoord = $Antwoord;
      return $this;
    }

}
