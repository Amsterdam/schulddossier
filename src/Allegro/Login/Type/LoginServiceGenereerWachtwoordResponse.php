<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceGenereerWachtwoordResponse implements ResultInterface
{

    /**
     * @var bool
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
     * @return bool
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return LoginServiceGenereerWachtwoordResponse
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
     * @return LoginServiceGenereerWachtwoordResponse
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
     * @return LoginServiceGenereerWachtwoordResponse
     */
    public function withExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }


}

