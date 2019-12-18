<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebMagAanmelden implements RequestInterface
{

    /**
     * @var int
     */
    private $aRelatieCode;

    /**
     * Constructor
     *
     * @var int $aRelatieCode
     */
    public function __construct($aRelatieCode)
    {
        $this->aRelatieCode = $aRelatieCode;
    }

    /**
     * @return int
     */
    public function getARelatieCode()
    {
        return $this->aRelatieCode;
    }

    /**
     * @param int $aRelatieCode
     * @return LoginServiceAllegroWebMagAanmelden
     */
    public function withARelatieCode($aRelatieCode)
    {
        $new = clone $this;
        $new->aRelatieCode = $aRelatieCode;

        return $new;
    }


}

