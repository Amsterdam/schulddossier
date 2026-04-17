<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class BBROpdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBROpdracht
     */
    private $TBBROpdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBROpdracht
     */
    public function getTBBROpdracht()
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TBBROpdracht $TBBROpdracht
     * @return BBROpdrachtArray
     */
    public function withTBBROpdracht($TBBROpdracht)
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}

