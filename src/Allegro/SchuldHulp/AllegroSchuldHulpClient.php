<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AllegroSchuldHulpClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzichtResponse
    {
        return ($this->caller)('GetSBOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSB $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBResponse
    {
        return ($this->caller)('GetSB', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisersResponse
    {
        return ($this->caller)('GetSBEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzichtResponse
    {
        return ($this->caller)('GetSRVOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraagResponse
    {
        return ($this->caller)('GetSRVAanvraag', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisersResponse
    {
        return ($this->caller)('GetSRVEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        return ($this->caller)('GetLijstSchuldeisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSRResponse
    {
        return ($this->caller)('AanvraagSR', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SRResponse
    {
        return ($this->caller)('Aanvraag2SR', $parameters);
    }
}
