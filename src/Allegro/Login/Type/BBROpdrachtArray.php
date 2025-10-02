<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBROpdrachtArray implements RequestInterface
{

    /**
     * @var TBBROpdracht
     */
    private $TBBROpdracht;

    /**
     * Constructor
     *
     * @var TBBROpdracht $TBBROpdracht
     */
    public function __construct($TBBROpdracht)
    {
        $this->TBBROpdracht = $TBBROpdracht;
    }

    /**
     * @return TBBROpdracht
     */
    public function getTBBROpdracht()
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param TBBROpdracht $TBBROpdracht
     * @return BBROpdrachtArray
     */
    public function withTBBROpdracht($TBBROpdracht)
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }


}

