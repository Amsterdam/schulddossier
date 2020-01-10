<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBROpdrachten implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray
     */
    private $BBROpdrachten;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten
     */
    public function __construct($BBROpdrachten)
    {
        $this->BBROpdrachten = $BBROpdrachten;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
        return $this->BBROpdrachten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray $BBROpdrachten
     * @return TBBROpdrachten
     */
    public function withBBROpdrachten($BBROpdrachten)
    {
        $new = clone $this;
        $new->BBROpdrachten = $BBROpdrachten;

        return $new;
    }


}

