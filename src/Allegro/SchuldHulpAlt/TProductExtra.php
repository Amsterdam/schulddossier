<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TProductExtra
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $Tabel
     */
    protected $Tabel = null;

    /**
     * @var int $Opdrachtgever
     */
    protected $Opdrachtgever = null;

    /**
     * @var int $OpdrachtgeverContact
     */
    protected $OpdrachtgeverContact = null;

    /**
     * @param int $Code
     * @param int $Volgnummer
     * @param string $Tabel
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     */
    public function __construct($Code, $Volgnummer, $Tabel, $Opdrachtgever, $OpdrachtgeverContact)
    {
      $this->Code = $Code;
      $this->Volgnummer = $Volgnummer;
      $this->Tabel = $Tabel;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TProductExtra
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TProductExtra
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTabel()
    {
      return $this->Tabel;
    }

    /**
     * @param string $Tabel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TProductExtra
     */
    public function setTabel($Tabel)
    {
      $this->Tabel = $Tabel;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
      return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TProductExtra
     */
    public function setOpdrachtgever($Opdrachtgever)
    {
      $this->Opdrachtgever = $Opdrachtgever;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
      return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TProductExtra
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

}
