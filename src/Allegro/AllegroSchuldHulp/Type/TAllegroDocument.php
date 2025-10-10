<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TAllegroDocument
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel
     */
    public function getDocumentSleutel()
    {
        return $this->DocumentSleutel;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel $DocumentSleutel
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

