<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class FooterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TFooter
     */
    private $TFooter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TFooter
     */
    public function getTFooter()
    {
        return $this->TFooter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TFooter $TFooter
     * @return FooterArray
     */
    public function withTFooter($TFooter)
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

