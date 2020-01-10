<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceActiveerRegistratie implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var string
     */
    private $RegistratieCode;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var string $RegistratieCode
     */
    public function __construct($RelatieCode, $RegistratieCode)
    {
        $this->RelatieCode = $RelatieCode;
        $this->RegistratieCode = $RegistratieCode;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return LoginServiceActiveerRegistratie
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegistratieCode()
    {
        return $this->RegistratieCode;
    }

    /**
     * @param string $RegistratieCode
     * @return LoginServiceActiveerRegistratie
     */
    public function withRegistratieCode($RegistratieCode)
    {
        $new = clone $this;
        $new->RegistratieCode = $RegistratieCode;

        return $new;
    }


}

