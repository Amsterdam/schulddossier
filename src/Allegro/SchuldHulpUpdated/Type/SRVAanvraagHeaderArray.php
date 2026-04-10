<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader
     */
    private $TSRVAanvraagHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader
     */
    public function getTSRVAanvraagHeader()
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader $TSRVAanvraagHeader
     * @return SRVAanvraagHeaderArray
     */
    public function withTSRVAanvraagHeader($TSRVAanvraagHeader)
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

