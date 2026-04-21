<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class PLAanvraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLAanvraag
     */
    private $TPLAanvraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLAanvraag
     */
    public function getTPLAanvraag()
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TPLAanvraag $TPLAanvraag
     * @return PLAanvraagArray
     */
    public function withTPLAanvraag($TPLAanvraag)
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }
}
