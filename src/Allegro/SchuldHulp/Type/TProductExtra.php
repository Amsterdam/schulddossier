<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TProductExtra implements RequestInterface
{
    /**
     * @var int
     */
    private $Code;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var string
     */
    private $Tabel;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * Constructor
     *
     * @var int $Code
     * @var int $Volgnummer
     * @var string $Tabel
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     */
    public function __construct($Code, $Volgnummer, $Tabel, $Opdrachtgever, $OpdrachtgeverContact)
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TProductExtra
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TProductExtra
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
    public function getTabel()
    {
        return $this->Tabel;
    }

    /**
     * @param string $Tabel
     * @return TProductExtra
     */
    public function withTabel($Tabel)
    {
        $new = clone $this;
        $new->Tabel = $Tabel;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return TProductExtra
     */
    public function withOpdrachtgever($Opdrachtgever)
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return TProductExtra
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }
}
