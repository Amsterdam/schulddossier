<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

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
     * @param RequestInterface & Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBOverzichtResponse
    {
        $response = ($this->caller)('GetSBOverzicht', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBOverzichtResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSB $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBResponse
    {
        $response = ($this->caller)('GetSB', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBEisersResponse
    {
        $response = ($this->caller)('GetSBEisers', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSBEisersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzichtResponse
    {
        $response = ($this->caller)('GetSRVOverzicht', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzichtResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraag $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraagResponse
    {
        $response = ($this->caller)('GetSRVAanvraag', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraagResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisersResponse
    {
        $response = ($this->caller)('GetSRVEisers', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface & Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        $response = ($this->caller)('GetLijstSchuldeisers', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisersResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * deprecated Allegro 3.26.1
     *       
     *
     * @param RequestInterface & Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface & Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraagSR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraagSRResponse
    {
        $response = ($this->caller)('AanvraagSR', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraagSRResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface & Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraag2SR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraag2SRResponse
    {
        $response = ($this->caller)('Aanvraag2SR', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceAanvraag2SRResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

