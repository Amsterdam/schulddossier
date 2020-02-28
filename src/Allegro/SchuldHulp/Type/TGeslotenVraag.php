<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TGeslotenVraag implements RequestInterface
{

    /**
     * @var string
     */
    private $Vraag;

    /**
     * @var string
     */
    private $Antwoord;

    /**
     * Constructor
     *
     * @var string $Vraag
     * @var string $Antwoord
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
     * @return TGeslotenVraag
     */
    public function withVraag($Vraag)
    {
        $new = clone $this;
        $new->Vraag = $Vraag;

        return $new;
    }

    /**
     * @return string
     */
    public function getAntwoord()
    {
        return $this->Antwoord;
    }

    /**
     * @param string $Antwoord
     * @return TGeslotenVraag
     */
    public function withAntwoord($Antwoord)
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }


}

