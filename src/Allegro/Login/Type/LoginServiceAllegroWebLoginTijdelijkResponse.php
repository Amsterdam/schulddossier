<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceAllegroWebLoginTijdelijkResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $Result;

    /**
     * @var AWUserInfo
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
     * @return LoginServiceAllegroWebLoginTijdelijkResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return AWUserInfo
     */
    public function getAUserInfo()
    {
        return $this->aUserInfo;
    }

    /**
     * @param AWUserInfo $aUserInfo
     * @return LoginServiceAllegroWebLoginTijdelijkResponse
     */
    public function withAUserInfo($aUserInfo)
    {
        $new = clone $this;
        $new->aUserInfo = $aUserInfo;

        return $new;
    }


}

