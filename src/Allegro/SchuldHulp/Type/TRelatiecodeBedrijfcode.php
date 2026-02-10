<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TRelatiecodeBedrijfcode implements RequestInterface
{
    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Bedrijfscode;

    /**
     * @var string
     */
    private $Bedrijfsnaam;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $Bedrijfscode
     * @var string $Bedrijfsnaam
     */
    public function __construct($Relatiecode, $Bedrijfscode, $Bedrijfsnaam)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Bedrijfscode = $Bedrijfscode;
        $this->Bedrijfsnaam = $Bedrijfsnaam;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TRelatiecodeBedrijfcode
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getBedrijfscode()
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return TRelatiecodeBedrijfcode
     */
    public function withBedrijfscode($Bedrijfscode)
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBedrijfsnaam()
    {
        return $this->Bedrijfsnaam;
    }

    /**
     * @param string $Bedrijfsnaam
     * @return TRelatiecodeBedrijfcode
     */
    public function withBedrijfsnaam($Bedrijfsnaam)
    {
        $new = clone $this;
        $new->Bedrijfsnaam = $Bedrijfsnaam;

        return $new;
    }
}
