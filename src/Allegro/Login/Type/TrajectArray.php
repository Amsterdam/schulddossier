<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectArray implements RequestInterface
{

    /**
     * @var TTraject
     */
    private $TTraject;

    /**
     * Constructor
     *
     * @var TTraject $TTraject
     */
    public function __construct($TTraject)
    {
        $this->TTraject = $TTraject;
    }

    /**
     * @return TTraject
     */
    public function getTTraject()
    {
        return $this->TTraject;
    }

    /**
     * @param TTraject $TTraject
     * @return TrajectArray
     */
    public function withTTraject($TTraject)
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }


}

