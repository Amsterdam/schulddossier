<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated;

use Phpro\SoapClient\Caller\Caller;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceClient
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
     * @param RequestInterface & Type\LoginServiceAllegroWebLogin $parameters
     * @return ResultInterface & Type\LoginServiceAllegroWebLoginResponse
     * @throws SoapException
     */
    public function allegroWebLogin(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogin $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginResponse
    {
        $response = ($this->caller)('AllegroWebLogin', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceAllegroWebMagAanmelden $parameters
     * @return ResultInterface & Type\LoginServiceAllegroWebMagAanmeldenResponse
     * @throws SoapException
     */
    public function allegroWebMagAanmelden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebMagAanmelden $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebMagAanmeldenResponse
    {
        $response = ($this->caller)('AllegroWebMagAanmelden', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebMagAanmeldenResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceAllegroWebLoginTijdelijk $parameters
     * @return ResultInterface & Type\LoginServiceAllegroWebLoginTijdelijkResponse
     * @throws SoapException
     */
    public function allegroWebLoginTijdelijk(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginTijdelijk $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginTijdelijkResponse
    {
        $response = ($this->caller)('AllegroWebLoginTijdelijk', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginTijdelijkResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceBSNNaarRelatie $parameters
     * @return ResultInterface & Type\LoginServiceBSNNaarRelatieResponse
     * @throws SoapException
     */
    public function bSNNaarRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieResponse
    {
        $response = ($this->caller)('BSNNaarRelatie', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceGenereerWachtwoord $parameters
     * @return ResultInterface & Type\LoginServiceGenereerWachtwoordResponse
     * @throws SoapException
     */
    public function genereerWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceGenereerWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceGenereerWachtwoordResponse
    {
        $response = ($this->caller)('GenereerWachtwoord', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceGenereerWachtwoordResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceNieuweRegistratie $parameters
     * @return ResultInterface & Type\LoginServiceNieuweRegistratieResponse
     * @throws SoapException
     */
    public function nieuweRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieResponse
    {
        $response = ($this->caller)('NieuweRegistratie', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceActiveerRegistratie $parameters
     * @return ResultInterface & Type\LoginServiceActiveerRegistratieResponse
     * @throws SoapException
     */
    public function activeerRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceActiveerRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceActiveerRegistratieResponse
    {
        $response = ($this->caller)('ActiveerRegistratie', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceActiveerRegistratieResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceNieuwContact $parameters
     * @return ResultInterface & Type\LoginServiceNieuwContactResponse
     * @throws SoapException
     */
    public function nieuwContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuwContact $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuwContactResponse
    {
        $response = ($this->caller)('NieuwContact', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuwContactResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceCheckWachtwoord $parameters
     * @return ResultInterface & Type\LoginServiceCheckWachtwoordResponse
     * @throws SoapException
     */
    public function checkWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceCheckWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceCheckWachtwoordResponse
    {
        $response = ($this->caller)('CheckWachtwoord', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceCheckWachtwoordResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceNieuweRegistratieBSN $parameters
     * @return ResultInterface & Type\LoginServiceNieuweRegistratieBSNResponse
     * @throws SoapException
     */
    public function nieuweRegistratieBSN(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieBSN $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieBSNResponse
    {
        $response = ($this->caller)('NieuweRegistratieBSN', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieBSNResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceAllegroWebLogout $parameters
     * @return ResultInterface & Type\LoginServiceAllegroWebLogoutResponse
     * @throws SoapException
     */
    public function allegroWebLogout(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogout $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogoutResponse
    {
        $response = ($this->caller)('AllegroWebLogout', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogoutResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters
     * @return ResultInterface & Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
     * @throws SoapException
     */
    public function bSNNaarRelatieMetBedrijf(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
    {
        $response = ($this->caller)('BSNNaarRelatieMetBedrijf', $parameters);

        \Psl\Type\instance_of(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieMetBedrijfResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

