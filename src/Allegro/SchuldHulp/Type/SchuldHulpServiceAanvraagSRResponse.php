<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceAanvraagSRResponse implements ResultInterface
{
    /**
     * @var bool
     */
    private bool $Result;

    /**
     * @var int
     */
    private int $ExtraInfo;

    /**
     * @var string
     */
    private string $ExtraInfoOmschrijving;

    /**
     * @return bool
     */
    public function getResult() : bool
    {
        return $this->Result;
    }

    /**
     * @param bool $Result
     * @return static
     */
    public function withResult(bool $Result) : static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return int
     */
    public function getExtraInfo() : int
    {
        return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return static
     */
    public function withExtraInfo(int $ExtraInfo) : static
    {
        $new = clone $this;
        $new->ExtraInfo = $ExtraInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving() : string
    {
        return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return static
     */
    public function withExtraInfoOmschrijving(string $ExtraInfoOmschrijving) : static
    {
        $new = clone $this;
        $new->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;

        return $new;
    }
}

