<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceAllegroWebMagAanmeldenResponse implements ResultInterface
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
     * @return LoginServiceAllegroWebMagAanmeldenResponse
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
     * @return LoginServiceAllegroWebMagAanmeldenResponse
     */
    public function withAUserInfo($aUserInfo)
    {
        $new = clone $this;
        $new->aUserInfo = $aUserInfo;

        return $new;
    }


}

