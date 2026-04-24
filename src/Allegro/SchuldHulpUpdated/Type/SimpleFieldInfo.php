<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleFieldInfo
{
    /**
     * @var string
     */
    private string $Name;

    /**
     * @var 'String' | 'Integer' | 'Double' | 'DateTime' | 'Int64' | 'Currency' | 'Guid' | 'Binary' | 'Boolean'
     */
    private string $DataType;

    /**
     * @var bool
     */
    private bool $Hidden;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return static
     */
    public function withName(string $Name): static
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return 'String' | 'Integer' | 'Double' | 'DateTime' | 'Int64' | 'Currency' | 'Guid' | 'Binary' | 'Boolean'
     */
    public function getDataType(): string
    {
        return $this->DataType;
    }

    /**
     * @param 'String' | 'Integer' | 'Double' | 'DateTime' | 'Int64' | 'Currency' | 'Guid' | 'Binary' | 'Boolean' $DataType
     * @return static
     */
    public function withDataType(string $DataType): static
    {
        $new = clone $this;
        $new->DataType = $DataType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->Hidden;
    }

    /**
     * @param bool $Hidden
     * @return static
     */
    public function withHidden(bool $Hidden): static
    {
        $new = clone $this;
        $new->Hidden = $Hidden;

        return $new;
    }
}

