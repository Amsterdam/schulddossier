<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SRVAanvraagHeaderArray implements RequestInterface
{

    /**
     * @var TSRVAanvraagHeader
     */
    private $TSRVAanvraagHeader;

    /**
     * Constructor
     *
     * @var TSRVAanvraagHeader $TSRVAanvraagHeader
     */
    public function __construct($TSRVAanvraagHeader)
    {
        $this->TSRVAanvraagHeader = $TSRVAanvraagHeader;
    }

    /**
     * @return TSRVAanvraagHeader
     */
    public function getTSRVAanvraagHeader()
    {
        return $this->TSRVAanvraagHeader;
    }

    /**
     * @param TSRVAanvraagHeader $TSRVAanvraagHeader
     * @return SRVAanvraagHeaderArray
     */
    public function withTSRVAanvraagHeader($TSRVAanvraagHeader)
    {
        $new = clone $this;
        $new->TSRVAanvraagHeader = $TSRVAanvraagHeader;

        return $new;
    }


}

