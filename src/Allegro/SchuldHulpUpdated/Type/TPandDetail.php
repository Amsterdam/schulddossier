<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPandDetail
{
    /**
     * @var string
     */
    private $Pandnummer;

    /**
     * @var int
     */
    private $BeleenBewijsVlgnr;

    /**
     * @var string
     */
    private $BeleenBewijsNr;

    /**
     * @var \DateTimeInterface
     */
    private $StartDatum;

    /**
     * @var \DateTimeInterface
     */
    private $Beleenbewijs_Datum;

    /**
     * @var \DateTimeInterface
     */
    private $Beleenbewijs_Einddatum;

    /**
     * @var float
     */
    private $Beleenbewijs_Beleensom;

    /**
     * @var int
     */
    private $Verlengen;

    /**
     * @var \DateTimeInterface
     */
    private $NwBeleenbewijs_Einddatum;

    /**
     * @var float
     */
    private $NwBeleenbewijs_Rente;

    /**
     * @var float
     */
    private $Rentepercentage;

    /**
     * @var int
     */
    private $AantalArtikelen;

    /**
     * @var string
     */
    private $OmschrijvingArtikelen;

    /**
     * @var float
     */
    private $TotaalTaxatieWaarde;

    /**
     * @return string
     */
    public function getPandnummer()
    {
        return $this->Pandnummer;
    }

    /**
     * @param string $Pandnummer
     * @return TPandDetail
     */
    public function withPandnummer($Pandnummer)
    {
        $new = clone $this;
        $new->Pandnummer = $Pandnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getBeleenBewijsVlgnr()
    {
        return $this->BeleenBewijsVlgnr;
    }

    /**
     * @param int $BeleenBewijsVlgnr
     * @return TPandDetail
     */
    public function withBeleenBewijsVlgnr($BeleenBewijsVlgnr)
    {
        $new = clone $this;
        $new->BeleenBewijsVlgnr = $BeleenBewijsVlgnr;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeleenBewijsNr()
    {
        return $this->BeleenBewijsNr;
    }

    /**
     * @param string $BeleenBewijsNr
     * @return TPandDetail
     */
    public function withBeleenBewijsNr($BeleenBewijsNr)
    {
        $new = clone $this;
        $new->BeleenBewijsNr = $BeleenBewijsNr;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum()
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return TPandDetail
     */
    public function withStartDatum($StartDatum)
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Datum()
    {
        return $this->Beleenbewijs_Datum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Datum
     * @return TPandDetail
     */
    public function withBeleenbewijs_Datum($Beleenbewijs_Datum)
    {
        $new = clone $this;
        $new->Beleenbewijs_Datum = $Beleenbewijs_Datum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Einddatum()
    {
        return $this->Beleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Einddatum
     * @return TPandDetail
     */
    public function withBeleenbewijs_Einddatum($Beleenbewijs_Einddatum)
    {
        $new = clone $this;
        $new->Beleenbewijs_Einddatum = $Beleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getBeleenbewijs_Beleensom()
    {
        return $this->Beleenbewijs_Beleensom;
    }

    /**
     * @param float $Beleenbewijs_Beleensom
     * @return TPandDetail
     */
    public function withBeleenbewijs_Beleensom($Beleenbewijs_Beleensom)
    {
        $new = clone $this;
        $new->Beleenbewijs_Beleensom = $Beleenbewijs_Beleensom;

        return $new;
    }

    /**
     * @return int
     */
    public function getVerlengen()
    {
        return $this->Verlengen;
    }

    /**
     * @param int $Verlengen
     * @return TPandDetail
     */
    public function withVerlengen($Verlengen)
    {
        $new = clone $this;
        $new->Verlengen = $Verlengen;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getNwBeleenbewijs_Einddatum()
    {
        return $this->NwBeleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $NwBeleenbewijs_Einddatum
     * @return TPandDetail
     */
    public function withNwBeleenbewijs_Einddatum($NwBeleenbewijs_Einddatum)
    {
        $new = clone $this;
        $new->NwBeleenbewijs_Einddatum = $NwBeleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getNwBeleenbewijs_Rente()
    {
        return $this->NwBeleenbewijs_Rente;
    }

    /**
     * @param float $NwBeleenbewijs_Rente
     * @return TPandDetail
     */
    public function withNwBeleenbewijs_Rente($NwBeleenbewijs_Rente)
    {
        $new = clone $this;
        $new->NwBeleenbewijs_Rente = $NwBeleenbewijs_Rente;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentepercentage()
    {
        return $this->Rentepercentage;
    }

    /**
     * @param float $Rentepercentage
     * @return TPandDetail
     */
    public function withRentepercentage($Rentepercentage)
    {
        $new = clone $this;
        $new->Rentepercentage = $Rentepercentage;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalArtikelen()
    {
        return $this->AantalArtikelen;
    }

    /**
     * @param int $AantalArtikelen
     * @return TPandDetail
     */
    public function withAantalArtikelen($AantalArtikelen)
    {
        $new = clone $this;
        $new->AantalArtikelen = $AantalArtikelen;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijvingArtikelen()
    {
        return $this->OmschrijvingArtikelen;
    }

    /**
     * @param string $OmschrijvingArtikelen
     * @return TPandDetail
     */
    public function withOmschrijvingArtikelen($OmschrijvingArtikelen)
    {
        $new = clone $this;
        $new->OmschrijvingArtikelen = $OmschrijvingArtikelen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalTaxatieWaarde()
    {
        return $this->TotaalTaxatieWaarde;
    }

    /**
     * @param float $TotaalTaxatieWaarde
     * @return TPandDetail
     */
    public function withTotaalTaxatieWaarde($TotaalTaxatieWaarde)
    {
        $new = clone $this;
        $new->TotaalTaxatieWaarde = $TotaalTaxatieWaarde;

        return $new;
    }
}
