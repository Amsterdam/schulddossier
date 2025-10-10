<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TBBRVorm
{
    /**
     * @var string
     */
    private $BBRVormCode;

    /**
     * @var string
     */
    private $BBRVormOmschrijving;

    /**
     * @return string
     */
    public function getBBRVormCode()
    {
        return $this->BBRVormCode;
    }

    /**
     * @param string $BBRVormCode
     * @return TBBRVorm
     */
    public function withBBRVormCode($BBRVormCode)
    {
        $new = clone $this;
        $new->BBRVormCode = $BBRVormCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBBRVormOmschrijving()
    {
        return $this->BBRVormOmschrijving;
    }

    /**
     * @param string $BBRVormOmschrijving
     * @return TBBRVorm
     */
    public function withBBRVormOmschrijving($BBRVormOmschrijving)
    {
        $new = clone $this;
        $new->BBRVormOmschrijving = $BBRVormOmschrijving;

        return $new;
    }
}

