<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAllegroDocument implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocumentSleutel
     */
    private $DocumentSleutel;

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Activiteit;

    /**
     * @var string
     */
    private $SoortActiviteit;

    /**
     * @var string
     */
    private $Onderwerp;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocumentSleutel $DocumentSleutel
     * @var int $Relatiecode
     * @var int $Activiteit
     * @var string $SoortActiviteit
     * @var string $Onderwerp
     * @var string $Omschrijving
     */
    public function __construct($DocumentSleutel, $Relatiecode, $Activiteit, $SoortActiviteit, $Onderwerp, $Omschrijving)
    {
        $this->DocumentSleutel = $DocumentSleutel;
        $this->Relatiecode = $Relatiecode;
        $this->Activiteit = $Activiteit;
        $this->SoortActiviteit = $SoortActiviteit;
        $this->Onderwerp = $Onderwerp;
        $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocumentSleutel
     */
    public function getDocumentSleutel()
    {
        return $this->DocumentSleutel;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocumentSleutel $DocumentSleutel
     * @return TAllegroDocument
     */
    public function withDocumentSleutel($DocumentSleutel)
    {
        $new = clone $this;
        $new->DocumentSleutel = $DocumentSleutel;

        return $new;
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
     * @return TAllegroDocument
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
    public function getActiviteit()
    {
        return $this->Activiteit;
    }

    /**
     * @param int $Activiteit
     * @return TAllegroDocument
     */
    public function withActiviteit($Activiteit)
    {
        $new = clone $this;
        $new->Activiteit = $Activiteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortActiviteit()
    {
        return $this->SoortActiviteit;
    }

    /**
     * @param string $SoortActiviteit
     * @return TAllegroDocument
     */
    public function withSoortActiviteit($SoortActiviteit)
    {
        $new = clone $this;
        $new->SoortActiviteit = $SoortActiviteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return TAllegroDocument
     */
    public function withOnderwerp($Onderwerp)
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

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
     * @return TAllegroDocument
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }


}

