<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LoginServiceAllegroWebMagAanmeldenResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $Result;

    /**
     * Een meer uitgebreid UserInfo struct om extra informatie in kwijt te kunnen.
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo $aUserInfo;

    /**
     * @return bool
     */
    public function getResult(): bool
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return static
     */
    public function withResult(bool $Result): static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo
     */
    public function getAUserInfo(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo
    {
        return $this->aUserInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo $aUserInfo
     * @return static
     */
    public function withAUserInfo(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\AWUserInfo $aUserInfo): static
    {
        $new = clone $this;
        $new->aUserInfo = $aUserInfo;

        return $new;
    }
}

