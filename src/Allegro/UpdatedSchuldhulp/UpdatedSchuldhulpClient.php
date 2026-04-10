<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class UpdatedSchuldhulpClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSBOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSBOverzichtResponse
    {
        return $this->call('GetSBOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSB $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSBResponse
    {
        return $this->call('GetSB', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSBEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSBEisersResponse
    {
        return $this->call('GetSBEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVOverzichtResponse
    {
        return $this->call('GetSRVOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVAanvraag $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVAanvraagResponse
    {
        return $this->call('GetSRVAanvraag', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetSRVEisersResponse
    {
        return $this->call('GetSRVEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetLijstSchuldeisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        return $this->call('GetLijstSchuldeisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceAanvraagSR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceAanvraagSRResponse
    {
        return $this->call('AanvraagSR', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceAanvraag2SR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SchuldHulpServiceAanvraag2SRResponse
    {
        return $this->call('Aanvraag2SR', $parameters);
    }
}

