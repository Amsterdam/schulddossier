<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TGeslotenVraag
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

