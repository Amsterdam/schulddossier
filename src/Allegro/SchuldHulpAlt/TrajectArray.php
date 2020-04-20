<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TrajectArray
{

    /**
     * @var TTraject[] $TTraject
     */
    protected $TTraject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TTraject[]
     */
    public function getTTraject()
    {
      return $this->TTraject;
    }

    /**
     * @param TTraject[] $TTraject
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TrajectArray
     */
    public function setTTraject(array $TTraject = null)
    {
      $this->TTraject = $TTraject;
      return $this;
    }

}
