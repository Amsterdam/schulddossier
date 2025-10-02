<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TRekeningnummer implements RequestInterface
{
    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $IBAN;

    /**
     * @var string
     */
    private string $BIC;

    /**
     * @var string
     */
    private string $Bank;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * @var bool
     */
    private bool $Buitenland;

    /**
     * @var bool
     */
    private bool $Geblokkeerd;

    /**
     * Constructor
     *
     * @param int $Volgnummer
     * @param string $IBAN
     * @param string $BIC
     * @param string $Bank
     * @param string $Omschrijving
     * @param bool $Buitenland
     * @param bool $Geblokkeerd
     */
    public function __construct(int $Volgnummer, string $IBAN, string $BIC, string $Bank, string $Omschrijving, bool $Buitenland, bool $Geblokkeerd)
    {
        $this->Volgnummer = $Volgnummer;
        $this->IBAN = $IBAN;
        $this->BIC = $BIC;
        $this->Bank = $Bank;
        $this->Omschrijving = $Omschrijving;
        $this->Buitenland = $Buitenland;
        $this->Geblokkeerd = $Geblokkeerd;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getIBAN() : string
    {
        return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return static
     */
    public function withIBAN(string $IBAN) : static
    {
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getBIC() : string
    {
        return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return static
     */
    public function withBIC(string $BIC) : static
    {
        $new = clone $this;
        $new->BIC = $BIC;

        return $new;
    }

    /**
     * @return string
     */
    public function getBank() : string
    {
        return $this->Bank;
    }

    /**
     * @param string $Bank
     * @return static
     */
    public function withBank(string $Bank) : static
    {
        $new = clone $this;
        $new->Bank = $Bank;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBuitenland() : bool
    {
        return $this->Buitenland;
    }

    /**
     * @param bool $Buitenland
     * @return static
     */
    public function withBuitenland(bool $Buitenland) : static
    {
        $new = clone $this;
        $new->Buitenland = $Buitenland;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGeblokkeerd() : bool
    {
        return $this->Geblokkeerd;
    }

    /**
     * @param bool $Geblokkeerd
     * @return static
     */
    public function withGeblokkeerd(bool $Geblokkeerd) : static
    {
        $new = clone $this;
        $new->Geblokkeerd = $Geblokkeerd;

        return $new;
    }
}

