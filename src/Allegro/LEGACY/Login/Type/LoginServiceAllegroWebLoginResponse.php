<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceAllegroWebLoginResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $Result;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AWUserInfo
     */
    private $aUserInfo;

    /**
     * @return bool
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return LoginServiceAllegroWebLoginResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AWUserInfo
     */
    public function getAUserInfo()
    {
        return $this->aUserInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AWUserInfo $aUserInfo
     * @return LoginServiceAllegroWebLoginResponse
     */
    public function withAUserInfo($aUserInfo)
    {
        $new = clone $this;
        $new->aUserInfo = $aUserInfo;

        return $new;
    }
}
