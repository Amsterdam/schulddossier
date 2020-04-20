<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TTest
{

    /**
     * @var string $Veld1
     */
    protected $Veld1 = null;

    /**
     * @var int $Veld2
     */
    protected $Veld2 = null;

    /**
     * @param string $Veld1
     * @param int $Veld2
     */
    public function __construct($Veld1, $Veld2)
    {
      $this->Veld1 = $Veld1;
      $this->Veld2 = $Veld2;
    }

    /**
     * @return string
     */
    public function getVeld1()
    {
      return $this->Veld1;
    }

    /**
     * @param string $Veld1
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTest
     */
    public function setVeld1($Veld1)
    {
      $this->Veld1 = $Veld1;
      return $this;
    }

    /**
     * @return int
     */
    public function getVeld2()
    {
      return $this->Veld2;
    }

    /**
     * @param int $Veld2
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTest
     */
    public function setVeld2($Veld2)
    {
      $this->Veld2 = $Veld2;
      return $this;
    }

}
