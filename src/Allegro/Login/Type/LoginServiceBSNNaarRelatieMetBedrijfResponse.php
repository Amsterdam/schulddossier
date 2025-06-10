<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceBSNNaarRelatieMetBedrijfResponse implements ResultInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RelatiecodeBedrijfcodeArray
     */
    private $Result;

    /**
     * @var int
     */
    private $ExtraInfo;

    /**
     * @var string
     */
    private $ExtraInfoOmschrijving;

    /**
     * @return RelatiecodeBedrijfcodeArray
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param RelatiecodeBedrijfcodeArray $Result
     * @return LoginServiceBSNNaarRelatieMetBedrijfResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return int
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return LoginServiceBSNNaarRelatieMetBedrijfResponse
     */
    public function withExtraInfo($ExtraInfo)
    {
        $new = clone $this;
        $new->ExtraInfo = $ExtraInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving()
    {
        return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return LoginServiceBSNNaarRelatieMetBedrijfResponse
     */
    public function withExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }


}

