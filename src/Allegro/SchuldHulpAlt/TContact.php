<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContact
{

    /**
     * @var string $TelefoonThuis
     */
    protected $TelefoonThuis = null;

    /**
     * @var string $TelefoonMobiel
     */
    protected $TelefoonMobiel = null;

    /**
     * @var string $EmailAdres
     */
    protected $EmailAdres = null;

    /**
     * @param string $TelefoonThuis
     * @param string $TelefoonMobiel
     * @param string $EmailAdres
     */
    public function __construct($TelefoonThuis, $TelefoonMobiel, $EmailAdres)
    {
      $this->TelefoonThuis = $TelefoonThuis;
      $this->TelefoonMobiel = $TelefoonMobiel;
      $this->EmailAdres = $EmailAdres;
    }

    /**
     * @return string
     */
    public function getTelefoonThuis()
    {
      return $this->TelefoonThuis;
    }

    /**
     * @param string $TelefoonThuis
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContact
     */
    public function setTelefoonThuis($TelefoonThuis)
    {
      $this->TelefoonThuis = $TelefoonThuis;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelefoonMobiel()
    {
      return $this->TelefoonMobiel;
    }

    /**
     * @param string $TelefoonMobiel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContact
     */
    public function setTelefoonMobiel($TelefoonMobiel)
    {
      $this->TelefoonMobiel = $TelefoonMobiel;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAdres()
    {
      return $this->EmailAdres;
    }

    /**
     * @param string $EmailAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContact
     */
    public function setEmailAdres($EmailAdres)
    {
      $this->EmailAdres = $EmailAdres;
      return $this;
    }

}
