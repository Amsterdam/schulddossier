<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TRekeningnummer
{
    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $IBAN;

    /**
     * @var string
     */
    private $BIC;

    /**
     * @var string
     */
    private $Bank;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * @var bool
     */
    private $Buitenland;

    /**
     * @var bool
     */
    private $Geblokkeerd;

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TRekeningnummer
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return TRekeningnummer
     */
    public function withIBAN($IBAN)
    {
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getBIC()
    {
        return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return TRekeningnummer
     */
    public function withBIC($BIC)
    {
        $new = clone $this;
        $new->BIC = $BIC;

        return $new;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->Bank;
    }

    /**
     * @param string $Bank
     * @return TRekeningnummer
     */
    public function withBank($Bank)
    {
        $new = clone $this;
        $new->Bank = $Bank;

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
     * @return TRekeningnummer
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBuitenland()
    {
        return $this->Buitenland;
    }

    /**
     * @param bool $Buitenland
     * @return TRekeningnummer
     */
    public function withBuitenland($Buitenland)
    {
        $new = clone $this;
        $new->Buitenland = $Buitenland;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGeblokkeerd()
    {
        return $this->Geblokkeerd;
    }

    /**
     * @param bool $Geblokkeerd
     * @return TRekeningnummer
     */
    public function withGeblokkeerd($Geblokkeerd)
    {
        $new = clone $this;
        $new->Geblokkeerd = $Geblokkeerd;

        return $new;
    }
}

