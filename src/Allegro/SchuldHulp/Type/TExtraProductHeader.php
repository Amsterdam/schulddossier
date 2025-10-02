<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TExtraProductHeader implements RequestInterface
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $AanvraagDatum;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param string $Omschrijving
     * @param \DateTimeInterface $AanvraagDatum
     */
    public function __construct(int $Relatiecode, int $Volgnummer, string $Omschrijving, \DateTimeInterface $AanvraagDatum)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Volgnummer = $Volgnummer;
        $this->Omschrijving = $Omschrijving;
        $this->AanvraagDatum = $AanvraagDatum;
    }

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagDatum() : \DateTimeInterface
    {
        return $this->AanvraagDatum;
    }

    /**
     * @param \DateTimeInterface $AanvraagDatum
     * @return static
     */
    public function withAanvraagDatum(\DateTimeInterface $AanvraagDatum) : static
    {
        $new = clone $this;
        $new->AanvraagDatum = $AanvraagDatum;

        return $new;
    }
}

