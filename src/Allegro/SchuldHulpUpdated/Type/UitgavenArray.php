<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class UitgavenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TUitgaven
     */
    private $TUitgaven;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TUitgaven
     */
    public function getTUitgaven()
    {
        return $this->TUitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TUitgaven $TUitgaven
     * @return UitgavenArray
     */
    public function withTUitgaven($TUitgaven)
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }
}

