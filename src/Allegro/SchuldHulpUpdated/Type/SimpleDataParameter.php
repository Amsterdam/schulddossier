<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class SimpleDataParameter
{
    /**
     * @var 'String' | 'Integer' | 'Double' | 'DateTime' | 'Int64' | 'Currency' | 'Guid' | 'Binary' | 'Boolean'
     */
    private string $DataType;

    /**
     * @var string
     */
    private string $Name;

    /**
     * @var string
     */
    private string $Value;

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
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return static
     */
    public function withValue(string $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}

