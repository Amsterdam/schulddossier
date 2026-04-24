<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SimpleDeltaChange
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $OldValues;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $NewValues;

    /**
     * @var string
     */
    private string $Error;

    /**
     * @var 'Insert' | 'Delete' | 'Update'
     */
    private string $Mode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    public function getOldValues(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
    {
        return $this->OldValues;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $OldValues
     * @return static
     */
    public function withOldValues(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $OldValues): static
    {
        $new = clone $this;
        $new->OldValues = $OldValues;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    public function getNewValues(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
    {
        return $this->NewValues;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $NewValues
     * @return static
     */
    public function withNewValues(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $NewValues): static
    {
        $new = clone $this;
        $new->NewValues = $NewValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->Error;
    }

    /**
     * @param string $Error
     * @return static
     */
    public function withError(string $Error): static
    {
        $new = clone $this;
        $new->Error = $Error;

        return $new;
    }

    /**
     * @return 'Insert' | 'Delete' | 'Update'
     */
    public function getMode(): string
    {
        return $this->Mode;
    }

    /**
     * @param 'Insert' | 'Delete' | 'Update' $Mode
     * @return static
     */
    public function withMode(string $Mode): static
    {
        $new = clone $this;
        $new->Mode = $Mode;

        return $new;
    }
}

