<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TrajectArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject
     */
    private $TTraject;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject
     */
    public function getTTraject()
    {
        return $this->TTraject;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject $TTraject
     * @return TrajectArray
     */
    public function withTTraject($TTraject)
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}

