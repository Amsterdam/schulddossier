<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader
     */
    private $TSRVAanvraagHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader
     */
    public function getTSRVAanvraagHeader()
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader $TSRVAanvraagHeader
     * @return SRVAanvraagHeaderArray
     */
    public function withTSRVAanvraagHeader($TSRVAanvraagHeader)
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

