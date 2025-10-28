<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class ContractArray
{

    /**
     * @var TContract[] $TContract
     */
    protected $TContract = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TContract[]
     */
    public function getTContract()
    {
      return $this->TContract;
    }

    /**
     * @param TContract[] $TContract
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\ContractArray
     */
    public function setTContract(array $TContract = null)
    {
      $this->TContract = $TContract;
      return $this;
    }

}
