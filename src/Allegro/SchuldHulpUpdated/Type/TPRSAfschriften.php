<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TPRSAfschriften
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftArray
     */
    private $Afschriften;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftArray
     */
    public function getAfschriften()
    {
        return $this->Afschriften;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\PRSAfschriftArray $Afschriften
     * @return TPRSAfschriften
     */
    public function withAfschriften($Afschriften)
    {
        $new = clone $this;
        $new->Afschriften = $Afschriften;

        return $new;
    }
}

