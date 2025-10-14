<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TContact
{
    /**
     * @var string
     */
    private $TelefoonThuis;

    /**
     * @var string
     */
    private $TelefoonMobiel;

    /**
     * @var string
     */
    private $EmailAdres;

    /**
     * @return string
     */
    public function getTelefoonThuis()
    {
        return $this->TelefoonThuis;
    }

    /**
     * @param string $TelefoonThuis
     * @return TContact
     */
    public function withTelefoonThuis($TelefoonThuis)
    {
        $new = clone $this;
        $new->TelefoonThuis = $TelefoonThuis;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoonMobiel()
    {
        return $this->TelefoonMobiel;
    }

    /**
     * @param string $TelefoonMobiel
     * @return TContact
     */
    public function withTelefoonMobiel($TelefoonMobiel)
    {
        $new = clone $this;
        $new->TelefoonMobiel = $TelefoonMobiel;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAdres()
    {
        return $this->EmailAdres;
    }

    /**
     * @param string $EmailAdres
     * @return TContact
     */
    public function withEmailAdres($EmailAdres)
    {
        $new = clone $this;
        $new->EmailAdres = $EmailAdres;

        return $new;
    }
}

