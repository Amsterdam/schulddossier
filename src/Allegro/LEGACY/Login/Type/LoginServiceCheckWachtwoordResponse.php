<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceCheckWachtwoordResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private $Result;

    /**
     * @var bool
     */
    private $bIndicatie;

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
     * @return LoginServiceCheckWachtwoordResponse
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBIndicatie()
    {
        return $this->bIndicatie;
    }

    /**
     * @param bool $bIndicatie
     * @return LoginServiceCheckWachtwoordResponse
     */
    public function withBIndicatie($bIndicatie)
    {
        $new = clone $this;
        $new->bIndicatie = $bIndicatie;

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
     * @return LoginServiceCheckWachtwoordResponse
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
     * @return LoginServiceCheckWachtwoordResponse
     */
    public function withExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }
}
