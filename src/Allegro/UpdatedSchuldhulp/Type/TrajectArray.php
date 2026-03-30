<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TrajectArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTraject
     */
    private $TTraject;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTraject
     */
    public function getTTraject()
    {
        return $this->TTraject;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTraject $TTraject
     * @return TrajectArray
     */
    public function withTTraject($TTraject)
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}

