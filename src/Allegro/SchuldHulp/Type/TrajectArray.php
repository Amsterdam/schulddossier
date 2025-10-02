<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject>
     */
    private array $TTraject;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject> $TTraject
     */
    public function __construct(array $TTraject)
    {
        $this->TTraject = $TTraject;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject>
     */
    public function getTTraject() : array
    {
        return $this->TTraject;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject> $TTraject
     * @return static
     */
    public function withTTraject(array $TTraject) : static
    {
        $new = clone $this;
        $new->TTraject = $TTraject;

        return $new;
    }
}

