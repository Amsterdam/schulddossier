<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBROpdrachten implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten)
    {
        $this->BBROpdrachten = $BBROpdrachten;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten
     * @return static
     */
    public function withBBROpdrachten(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten) : static
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }
}

