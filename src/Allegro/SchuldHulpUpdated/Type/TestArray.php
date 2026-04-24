<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TestArray
{
    /**
     * Struct met 2 properties:
     * 1) Veld1 van het type WideString
     * 2) Veld2 van het type Integer
     *
     * @var non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest>
     */
    private array $TTest;

    /**
     * @return non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest>
     */
    public function getTTest(): array
    {
        return $this->TTest;
    }

    /**
     * @param non-empty-array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TTest> $TTest
     * @return static
     */
    public function withTTest(array $TTest): static
    {
        $new = clone $this;
        $new->TTest = $TTest;

        return $new;
    }
}

