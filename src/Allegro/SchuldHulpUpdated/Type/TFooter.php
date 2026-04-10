<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TFooter
{
    /**
     * @var string
     */
    private $Titel;

    /**
     * @var string
     */
    private $Hyperlink;

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     * @return TFooter
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
    public function getHyperlink()
    {
        return $this->Hyperlink;
    }

    /**
     * @param string $Hyperlink
     * @return TFooter
     */
    public function withHyperlink($Hyperlink)
    {
        $new = clone $this;
        $new->Hyperlink = $Hyperlink;

        return $new;
    }
}

