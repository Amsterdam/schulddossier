<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class FooterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter
     */
    private $TFooter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter
     */
    public function getTFooter()
    {
        return $this->TFooter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter $TFooter
     * @return FooterArray
     */
    public function withTFooter($TFooter)
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

