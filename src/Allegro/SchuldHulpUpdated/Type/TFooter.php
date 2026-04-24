<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TFooter
{
    /**
     * @var string
     */
    private string $Titel;

    /**
     * @var string
     */
    private string $Hyperlink;

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     * @return static
     */
    public function withTitel(string $Titel): static
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getHyperlink(): string
    {
        return $this->Hyperlink;
    }

    /**
     * @param string $Hyperlink
     * @return static
     */
    public function withHyperlink(string $Hyperlink): static
    {
        $new = clone $this;
        $new->Hyperlink = $Hyperlink;

        return $new;
    }
}

