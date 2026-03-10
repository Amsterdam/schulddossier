<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HulpverlenerArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener
     */
    private $THulpverlener;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener $THulpverlener
     */
    public function __construct($THulpverlener)
    {
        $this->THulpverlener = $THulpverlener;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}
