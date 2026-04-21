<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TNieuws
{
    /**
     * @var string
     */
    private $Titel;

    /**
     * @var string
     */
    private $Inhoud;

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     * @return TNieuws
     */
    public function withTitel($Titel)
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getInhoud()
    {
        return $this->Inhoud;
    }

    /**
     * @param string $Inhoud
     * @return TNieuws
     */
    public function withInhoud($Inhoud)
    {
        $new = clone $this;
        $new->Inhoud = $Inhoud;

        return $new;
    }
}
