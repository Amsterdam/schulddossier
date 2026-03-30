<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class FooterArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TFooter
     */
    private $TFooter;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TFooter
     */
    public function getTFooter()
    {
        return $this->TFooter;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TFooter $TFooter
     * @return FooterArray
     */
    public function withTFooter($TFooter)
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

