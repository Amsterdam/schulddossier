<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TJaNeeVraag implements RequestInterface
{
    /**
     * @var string
     */
    private $Vraag;

    /**
     * @var bool
     */
    private $Antwoord;

    /**
     * Constructor
     *
     * @var string $Vraag
     * @var bool $Antwoord
     */
    public function __construct($Vraag, $Antwoord)
    {
        $this->Vraag = $Vraag;
        $this->Antwoord = $Antwoord;
    }

    /**
     * @return string
     */
    public function getVraag()
    {
        return $this->Vraag;
    }

    /**
     * @param string $Vraag
     * @return TJaNeeVraag
     */
    public function withVraag($Vraag)
    {
        $new = clone $this;
        $new->Vraag = $Vraag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAntwoord()
    {
        return $this->Antwoord;
    }

    /**
     * @param bool $Antwoord
     * @return TJaNeeVraag
     */
    public function withAntwoord($Antwoord)
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}
