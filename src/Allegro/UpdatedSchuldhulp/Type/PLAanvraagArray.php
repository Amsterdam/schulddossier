<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class PLAanvraagArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLAanvraag
     */
    private $TPLAanvraag;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLAanvraag
     */
    public function getTPLAanvraag()
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TPLAanvraag $TPLAanvraag
     * @return PLAanvraagArray
     */
    public function withTPLAanvraag($TPLAanvraag)
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }
}

