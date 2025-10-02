<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TProductExtra implements RequestInterface
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var string
     */
    private string $Tabel;

    /**
     * @var int
     */
    private int $Opdrachtgever;

    /**
     * @var int
     */
    private int $OpdrachtgeverContact;

    /**
     * Constructor
     *
     * @param int $Code
     * @param int $Volgnummer
     * @param string $Tabel
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     */
    public function __construct(int $Code, int $Volgnummer, string $Tabel, int $Opdrachtgever, int $OpdrachtgeverContact)
    {
        $this->Code = $Code;
        $this->Volgnummer = $Volgnummer;
        $this->Tabel = $Tabel;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
    }

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
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
    public function getTabel() : string
    {
        return $this->Tabel;
    }

    /**
     * @param string $Tabel
     * @return static
     */
    public function withTabel(string $Tabel) : static
    {
        $new = clone $this;
        $new->Tabel = $Tabel;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever() : int
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return static
     */
    public function withOpdrachtgever(int $Opdrachtgever) : static
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact() : int
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return static
     */
    public function withOpdrachtgeverContact(int $OpdrachtgeverContact) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }
}

