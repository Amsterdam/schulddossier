<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp;

use Phpro\SoapClient\Client;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzichtResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSB;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzichtResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraagResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSRResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SRResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class AllegroSchuldHulpClient extends Client
{

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBOverzichtResponse
     * @throws SoapException
     */
    public function getSBOverzicht(SchuldHulpServiceGetSBOverzicht $parameters) : SchuldHulpServiceGetSBOverzichtResponse
    {
        return $this->call('GetSBOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSB $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBResponse
     * @throws SoapException
     */
    public function getSB(SchuldHulpServiceGetSB $parameters) : SchuldHulpServiceGetSBResponse
    {
        return $this->call('GetSB', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSBEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSBEisersResponse
     * @throws SoapException
     */
    public function getSBEisers(SchuldHulpServiceGetSBEisers $parameters) : SchuldHulpServiceGetSBEisersResponse
    {
        return $this->call('GetSBEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVOverzicht $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVOverzichtResponse
     * @throws SoapException
     */
    public function getSRVOverzicht(SchuldHulpServiceGetSRVOverzicht $parameters) : SchuldHulpServiceGetSRVOverzichtResponse
    {
        return $this->call('GetSRVOverzicht', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVAanvraag $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVAanvraagResponse
     * @throws SoapException
     */
    public function getSRVAanvraag(SchuldHulpServiceGetSRVAanvraag $parameters) : SchuldHulpServiceGetSRVAanvraagResponse
    {
        return $this->call('GetSRVAanvraag', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetSRVEisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetSRVEisersResponse
     * @throws SoapException
     */
    public function getSRVEisers(SchuldHulpServiceGetSRVEisers $parameters) : SchuldHulpServiceGetSRVEisersResponse
    {
        return $this->call('GetSRVEisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceGetLijstSchuldeisers $parameters
     * @return ResultInterface|Type\SchuldHulpServiceGetLijstSchuldeisersResponse
     * @throws SoapException
     */
    public function getLijstSchuldeisers(SchuldHulpServiceGetLijstSchuldeisers $parameters) : SchuldHulpServiceGetLijstSchuldeisersResponse
    {
        return $this->call('GetLijstSchuldeisers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraagSR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraagSRResponse
     * @throws SoapException
     */
    public function aanvraagSR(SchuldHulpServiceAanvraagSR $parameters) : SchuldHulpServiceAanvraagSRResponse
    {
        return $this->call('AanvraagSR', $parameters);
    }

    /**
     * @param RequestInterface|Type\SchuldHulpServiceAanvraag2SR $parameters
     * @return ResultInterface|Type\SchuldHulpServiceAanvraag2SRResponse
     * @throws SoapException
     */
    public function aanvraag2SR(SchuldHulpServiceAanvraag2SR $parameters) : SchuldHulpServiceAanvraag2SRResponse
    {
        return $this->call('Aanvraag2SR', $parameters);
    }


}

