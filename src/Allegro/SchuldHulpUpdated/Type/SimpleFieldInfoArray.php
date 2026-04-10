<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleFieldInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleFieldInfo
     */
    private $SimpleFieldInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleFieldInfo
     */
    public function getSimpleFieldInfo()
    {
        return $this->SimpleFieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleFieldInfo $SimpleFieldInfo
     * @return SimpleFieldInfoArray
     */
    public function withSimpleFieldInfo($SimpleFieldInfo)
    {
        $new = clone $this;
        $new->SimpleFieldInfo = $SimpleFieldInfo;

        return $new;
    }
}

