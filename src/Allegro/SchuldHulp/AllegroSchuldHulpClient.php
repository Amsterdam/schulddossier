<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class AllegroSchuldHulpClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzichtResponse
    {
        return $this->call('GetSBOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSB $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBResponse
    {
        return $this->call('GetSB', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisersResponse
    {
        return $this->call('GetSBEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzichtResponse
    {
        return $this->call('GetSRVOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraagResponse
    {
        return $this->call('GetSRVAanvraag', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisersResponse
    {
        return $this->call('GetSRVEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisers $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        return $this->call('GetLijstSchuldeisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSRResponse
    {
        return $this->call('AanvraagSR', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SR $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SRResponse
    {
        return $this->call('Aanvraag2SR', $parameters);
    }
}
