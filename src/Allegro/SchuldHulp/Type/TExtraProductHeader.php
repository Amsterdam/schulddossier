<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TExtraProductHeader implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var \DateTimeInterface
     */
    private $AanvraagDatum;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $Volgnummer
     * @var string $Omschrijving
     * @var \DateTimeInterface $AanvraagDatum
     */
    public function __construct($Relatiecode, $Volgnummer, $Omschrijving, $AanvraagDatum)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Volgnummer = $Volgnummer;
        $this->Omschrijving = $Omschrijving;
        $this->AanvraagDatum = $AanvraagDatum;
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
     * @return TExtraProductHeader
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
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TExtraProductHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return TExtraProductHeader
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanvraagDatum()
    {
        return $this->AanvraagDatum;
    }

    /**
     * @param \DateTimeInterface $AanvraagDatum
     * @return TExtraProductHeader
     */
    public function withAanvraagDatum($AanvraagDatum)
    {
        $new = clone $this;
        $new->AanvraagDatum = $AanvraagDatum;

        return $new;
    }


}

