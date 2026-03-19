<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriften implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray
     */
    private $Afschriften;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray $Afschriften
     */
    public function __construct($Afschriften)
    {
        $this->Afschriften = $Afschriften;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray
     */
    public function getAfschriften()
    {
        return $this->Afschriften;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray $Afschriften
     * @return TPRSAfschriften
     */
    public function withAfschriften($Afschriften)
    {
        $new = clone $this;
        $new->Afschriften = $Afschriften;

        return $new;
    }
}
