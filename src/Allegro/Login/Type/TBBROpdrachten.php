<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBROpdrachten implements RequestInterface
{

    /**
     * @var BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * Constructor
     *
     * @var BBROpdrachtArray $BBROpdrachten
     */
    public function __construct($BBROpdrachten)
    {
        $this->BBROpdrachten = $BBROpdrachten;
    }

    /**
     * @return BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }


}

