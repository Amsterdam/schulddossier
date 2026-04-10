<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class UitgavenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TUitgaven
     */
    private $TUitgaven;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TUitgaven
     */
    public function getTUitgaven()
    {
        return $this->TUitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TUitgaven $TUitgaven
     * @return UitgavenArray
     */
    public function withTUitgaven($TUitgaven)
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }
}

