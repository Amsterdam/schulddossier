<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTraject
     */
    private $TTraject;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTraject $TTraject
     */
    public function __construct($TTraject)
    {
        $this->TTraject = $TTraject;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTraject
     */
    public function getTTraject()
    {
        return $this->TTraject;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTraject $TTraject
     * @return TrajectArray
     */
    public function withTTraject($TTraject)
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}
