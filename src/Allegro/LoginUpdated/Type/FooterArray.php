<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class FooterArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter>
     */
    private array $TFooter;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter>
     */
    public function getTFooter(): array
    {
        return $this->TFooter;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TFooter> $TFooter
     * @return static
     */
    public function withTFooter(array $TFooter): static
    {
        $new = clone $this;
        $new->TFooter = $TFooter;

        return $new;
    }
}

