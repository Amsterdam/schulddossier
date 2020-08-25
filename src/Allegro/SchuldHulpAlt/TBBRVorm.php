<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBRVorm
{

    /**
     * @var string $BBRVormCode
     */
    protected $BBRVormCode = null;

    /**
     * @var string $BBRVormOmschrijving
     */
    protected $BBRVormOmschrijving = null;

    /**
     * @param string $BBRVormCode
     * @param string $BBRVormOmschrijving
     */
    public function __construct($BBRVormCode, $BBRVormOmschrijving)
    {
      $this->BBRVormCode = $BBRVormCode;
      $this->BBRVormOmschrijving = $BBRVormOmschrijving;
    }

    /**
     * @return string
     */
    public function getBBRVormCode()
    {
      return $this->BBRVormCode;
    }

    /**
     * @param string $BBRVormCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRVorm
     */
    public function setBBRVormCode($BBRVormCode)
    {
      $this->BBRVormCode = $BBRVormCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBBRVormOmschrijving()
    {
      return $this->BBRVormOmschrijving;
    }

    /**
     * @param string $BBRVormOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRVorm
     */
    public function setBBRVormOmschrijving($BBRVormOmschrijving)
    {
      $this->BBRVormOmschrijving = $BBRVormOmschrijving;
      return $this;
    }

}
