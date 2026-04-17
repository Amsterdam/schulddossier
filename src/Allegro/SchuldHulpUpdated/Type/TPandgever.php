<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TPandgever
{
    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var bool
     */
    private $Beleenverbod;

    /**
     * @var int
     */
    private $AantalActueel;

    /**
     * @var bool
     */
    private $Vorderingen;

    /**
     * @var float
     */
    private $BedragVorderingen;

    /**
     * @var bool
     */
    private $ReserveringNegatief;

    /**
     * @var float
     */
    private $BedragReservering;

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TPandgever
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBeleenverbod()
    {
        return $this->Beleenverbod;
    }

    /**
     * @param bool $Beleenverbod
     * @return TPandgever
     */
    public function withBeleenverbod($Beleenverbod)
    {
        $new = clone $this;
        $new->Beleenverbod = $Beleenverbod;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalActueel()
    {
        return $this->AantalActueel;
    }

    /**
     * @param int $AantalActueel
     * @return TPandgever
     */
    public function withAantalActueel($AantalActueel)
    {
        $new = clone $this;
        $new->AantalActueel = $AantalActueel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVorderingen()
    {
        return $this->Vorderingen;
    }

    /**
     * @param bool $Vorderingen
     * @return TPandgever
     */
    public function withVorderingen($Vorderingen)
    {
        $new = clone $this;
        $new->Vorderingen = $Vorderingen;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragVorderingen()
    {
        return $this->BedragVorderingen;
    }

    /**
     * @param float $BedragVorderingen
     * @return TPandgever
     */
    public function withBedragVorderingen($BedragVorderingen)
    {
        $new = clone $this;
        $new->BedragVorderingen = $BedragVorderingen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReserveringNegatief()
    {
        return $this->ReserveringNegatief;
    }

    /**
     * @param bool $ReserveringNegatief
     * @return TPandgever
     */
    public function withReserveringNegatief($ReserveringNegatief)
    {
        $new = clone $this;
        $new->ReserveringNegatief = $ReserveringNegatief;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragReservering()
    {
        return $this->BedragReservering;
    }

    /**
     * @param float $BedragReservering
     * @return TPandgever
     */
    public function withBedragReservering($BedragReservering)
    {
        $new = clone $this;
        $new->BedragReservering = $BedragReservering;

        return $new;
    }
}

