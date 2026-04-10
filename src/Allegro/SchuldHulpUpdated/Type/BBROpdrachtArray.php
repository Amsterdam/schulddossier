<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class BBROpdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBROpdracht
     */
    private $TBBROpdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBROpdracht
     */
    public function getTBBROpdracht()
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TBBROpdracht $TBBROpdracht
     * @return BBROpdrachtArray
     */
    public function withTBBROpdracht($TBBROpdracht)
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}

