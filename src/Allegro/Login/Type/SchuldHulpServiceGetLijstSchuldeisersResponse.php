<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SchuldHulpServiceGetLijstSchuldeisersResponse implements ResultInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray $Result;

    /**
     * @var int
     */
    private int $ExtraInfo;

    /**
     * @var string
     */
    private string $ExtraInfoOmschrijving;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray
     */
    public function getResult() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray
    {
        return $this->Result;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray $Result
     * @return static
     */
    public function withResult(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray $Result) : static
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

