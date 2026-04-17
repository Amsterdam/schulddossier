<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class PLAanvraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPLAanvraag
     */
    private $TPLAanvraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPLAanvraag
     */
    public function getTPLAanvraag()
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TPLAanvraag $TPLAanvraag
     * @return PLAanvraagArray
     */
    public function withTPLAanvraag($TPLAanvraag)
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }
}

