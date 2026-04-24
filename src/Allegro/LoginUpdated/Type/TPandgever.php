<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TPandgever
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var bool
     */
    private bool $Beleenverbod;

    /**
     * @var int
     */
    private int $AantalActueel;

    /**
     * @var bool
     */
    private bool $Vorderingen;

    /**
     * @var float
     */
    private float $BedragVorderingen;

    /**
     * @var bool
     */
    private bool $ReserveringNegatief;

    /**
     * @var float
     */
    private float $BedragReservering;

    /**
     * @return int
     */
    public function getRelatieCode(): int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode): static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBeleenverbod(): bool
    {
        return $this->Beleenverbod;
    }

    /**
     * @param bool $Beleenverbod
     * @return static
     */
    public function withBeleenverbod(bool $Beleenverbod): static
    {
        $new = clone $this;
        $new->Beleenverbod = $Beleenverbod;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalActueel(): int
    {
        return $this->AantalActueel;
    }

    /**
     * @param int $AantalActueel
     * @return static
     */
    public function withAantalActueel(int $AantalActueel): static
    {
        $new = clone $this;
        $new->AantalActueel = $AantalActueel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVorderingen(): bool
    {
        return $this->Vorderingen;
    }

    /**
     * @param bool $Vorderingen
     * @return static
     */
    public function withVorderingen(bool $Vorderingen): static
    {
        $new = clone $this;
        $new->Vorderingen = $Vorderingen;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragVorderingen(): float
    {
        return $this->BedragVorderingen;
    }

    /**
     * @param float $BedragVorderingen
     * @return static
     */
    public function withBedragVorderingen(float $BedragVorderingen): static
    {
        $new = clone $this;
        $new->BedragVorderingen = $BedragVorderingen;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReserveringNegatief(): bool
    {
        return $this->ReserveringNegatief;
    }

    /**
     * @param bool $ReserveringNegatief
     * @return static
     */
    public function withReserveringNegatief(bool $ReserveringNegatief): static
    {
        $new = clone $this;
        $new->ReserveringNegatief = $ReserveringNegatief;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragReservering(): float
    {
        return $this->BedragReservering;
    }

    /**
     * @param float $BedragReservering
     * @return static
     */
    public function withBedragReservering(float $BedragReservering): static
    {
        $new = clone $this;
        $new->BedragReservering = $BedragReservering;

        return $new;
    }
}

