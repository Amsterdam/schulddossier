<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TContact implements RequestInterface
{
    /**
     * @var string
     */
    private string $TelefoonThuis;

    /**
     * @var string
     */
    private string $TelefoonMobiel;

    /**
     * @var string
     */
    private string $EmailAdres;

    /**
     * Constructor
     *
     * @param string $TelefoonThuis
     * @param string $TelefoonMobiel
     * @param string $EmailAdres
     */
    public function __construct(string $TelefoonThuis, string $TelefoonMobiel, string $EmailAdres)
    {
        $this->TelefoonThuis = $TelefoonThuis;
        $this->TelefoonMobiel = $TelefoonMobiel;
        $this->EmailAdres = $EmailAdres;
    }

    /**
     * @return string
     */
    public function getTelefoonThuis() : string
    {
        return $this->TelefoonThuis;
    }

    /**
     * @param string $TelefoonThuis
     * @return static
     */
    public function withTelefoonThuis(string $TelefoonThuis) : static
    {
        $new = clone $this;
        $new->TelefoonThuis = $TelefoonThuis;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoonMobiel() : string
    {
        return $this->TelefoonMobiel;
    }

    /**
     * @param string $TelefoonMobiel
     * @return static
     */
    public function withTelefoonMobiel(string $TelefoonMobiel) : static
    {
        $new = clone $this;
        $new->TelefoonMobiel = $TelefoonMobiel;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAdres() : string
    {
        return $this->EmailAdres;
    }

    /**
     * @param string $EmailAdres
     * @return static
     */
    public function withEmailAdres(string $EmailAdres) : static
    {
        $new = clone $this;
        $new->EmailAdres = $EmailAdres;

        return $new;
    }
}

