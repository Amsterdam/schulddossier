<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBRVorm implements RequestInterface
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
     * Constructor
     *
     * @var string $BBRVormCode
     * @var string $BBRVormOmschrijving
     */
    public function __construct($BBRVormCode, $BBRVormOmschrijving)
    {
        $this->BBRVormCode = $BBRVormCode;
        $this->BBRVormOmschrijving = $BBRVormOmschrijving;
    }

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

