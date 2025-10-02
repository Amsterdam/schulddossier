<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAllegroDocument implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel;

    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Activiteit;

    /**
     * @var string
     */
    private string $SoortActiviteit;

    /**
     * @var string
     */
    private string $Onderwerp;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel
     * @param int $Relatiecode
     * @param int $Activiteit
     * @param string $SoortActiviteit
     * @param string $Onderwerp
     * @param string $Omschrijving
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel, int $Relatiecode, int $Activiteit, string $SoortActiviteit, string $Onderwerp, string $Omschrijving)
    {
        $this->DocumentSleutel = $DocumentSleutel;
        $this->Relatiecode = $Relatiecode;
        $this->Activiteit = $Activiteit;
        $this->SoortActiviteit = $SoortActiviteit;
        $this->Onderwerp = $Onderwerp;
        $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel
     */
    public function getDocumentSleutel() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel
    {
        return $this->DocumentSleutel;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel
     * @return static
     */
    public function withDocumentSleutel(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel) : static
    {
        $new = clone $this;
        $new->DocumentSleutel = $DocumentSleutel;

        return $new;
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
    public function getActiviteit() : int
    {
        return $this->Activiteit;
    }

    /**
     * @param int $Activiteit
     * @return static
     */
    public function withActiviteit(int $Activiteit) : static
    {
        $new = clone $this;
        $new->Activiteit = $Activiteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortActiviteit() : string
    {
        return $this->SoortActiviteit;
    }

    /**
     * @param string $SoortActiviteit
     * @return static
     */
    public function withSoortActiviteit(string $SoortActiviteit) : static
    {
        $new = clone $this;
        $new->SoortActiviteit = $SoortActiviteit;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp() : string
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return static
     */
    public function withOnderwerp(string $Onderwerp) : static
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

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
}

