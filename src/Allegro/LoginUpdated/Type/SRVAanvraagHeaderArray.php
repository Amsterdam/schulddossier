<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SRVAanvraagHeaderArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader
     */
    private $TSRVAanvraagHeader;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader
     */
    public function getTSRVAanvraagHeader()
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TSRVAanvraagHeader $TSRVAanvraagHeader
     * @return SRVAanvraagHeaderArray
     */
    public function withTSRVAanvraagHeader($TSRVAanvraagHeader)
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }
}

