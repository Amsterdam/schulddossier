<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TOpenVraag
{

    /**
     * @var string $Vraag
     */
    protected $Vraag = null;

    /**
     * @var string $Antwoord
     */
    protected $Antwoord = null;

    /**
     * @param string $Vraag
     * @param string $Antwoord
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpenVraag
     */
    public function setVraag($Vraag)
    {
      $this->Vraag = $Vraag;
      return $this;
    }

    /**
     * @return string
     */
    public function getAntwoord()
    {
      return $this->Antwoord;
    }

    /**
     * @param string $Antwoord
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TOpenVraag
     */
    public function setAntwoord($Antwoord)
    {
      $this->Antwoord = $Antwoord;
      return $this;
    }

}
