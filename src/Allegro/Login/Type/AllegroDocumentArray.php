<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AllegroDocumentArray implements RequestInterface
{

    /**
     * @var TAllegroDocument
     */
    private $TAllegroDocument;

    /**
     * Constructor
     *
     * @var TAllegroDocument $TAllegroDocument
     */
    public function __construct($TAllegroDocument)
    {
        $this->TAllegroDocument = $TAllegroDocument;
    }

    /**
     * @return TAllegroDocument
     */
    public function getTAllegroDocument()
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param TAllegroDocument $TAllegroDocument
     * @return AllegroDocumentArray
     */
    public function withTAllegroDocument($TAllegroDocument)
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }


}

