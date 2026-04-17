<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated;

use Phpro\SoapClient\Caller\Caller;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpUpdatedClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBOverzichtResponse
    {
        return ($this->caller)('GetSBOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSB $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBResponse
    {
        return ($this->caller)('GetSB', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBEisersResponse
    {
        return ($this->caller)('GetSBEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzichtResponse
    {
        return ($this->caller)('GetSRVOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraag $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraagResponse
    {
        return ($this->caller)('GetSRVAanvraag', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisersResponse
    {
        return ($this->caller)('GetSRVEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        return ($this->caller)('GetLijstSchuldeisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraagSR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraagSRResponse
    {
        return ($this->caller)('AanvraagSR', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraag2SR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraag2SRResponse
    {
        return ($this->caller)('Aanvraag2SR', $parameters);
    }
}

