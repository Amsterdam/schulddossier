<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class FooterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter
     */
    private $TFooter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter
     */
    public function getTFooter()
    {
        return $this->TFooter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TFooter $TFooter
     * @return FooterArray
     */
    public function withTFooter($TFooter)
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

