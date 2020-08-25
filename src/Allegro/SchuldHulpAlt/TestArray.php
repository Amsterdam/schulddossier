<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TestArray
{

    /**
     * @var TTest[] $TTest
     */
    protected $TTest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TTest[]
     */
    public function getTTest()
    {
      return $this->TTest;
    }

    /**
     * @param TTest[] $TTest
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TestArray
     */
    public function setTTest(array $TTest = null)
    {
      $this->TTest = $TTest;
      return $this;
    }

}
