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
     * @param RequestInterface|Type\LoginServiceAllegroWebLogin $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginResponse
     * @throws SoapException
     */
    public function allegroWebLogin(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogin $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginResponse
    {
        return ($this->caller)('AllegroWebLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebMagAanmelden $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebMagAanmeldenResponse
     * @throws SoapException
     */
    public function allegroWebMagAanmelden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebMagAanmelden $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebMagAanmeldenResponse
    {
        return ($this->caller)('AllegroWebMagAanmelden', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLoginTijdelijk $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginTijdelijkResponse
     * @throws SoapException
     */
    public function allegroWebLoginTijdelijk(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginTijdelijk $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLoginTijdelijkResponse
    {
        return ($this->caller)('AllegroWebLoginTijdelijk', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatie $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieResponse
     * @throws SoapException
     */
    public function bSNNaarRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieResponse
    {
        return ($this->caller)('BSNNaarRelatie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceGenereerWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceGenereerWachtwoordResponse
     * @throws SoapException
     */
    public function genereerWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceGenereerWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceGenereerWachtwoordResponse
    {
        return ($this->caller)('GenereerWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieResponse
     * @throws SoapException
     */
    public function nieuweRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieResponse
    {
        return ($this->caller)('NieuweRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceActiveerRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceActiveerRegistratieResponse
     * @throws SoapException
     */
    public function activeerRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceActiveerRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceActiveerRegistratieResponse
    {
        return ($this->caller)('ActiveerRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuwContact $parameters
     * @return ResultInterface|Type\LoginServiceNieuwContactResponse
     * @throws SoapException
     */
    public function nieuwContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuwContact $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuwContactResponse
    {
        return ($this->caller)('NieuwContact', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceCheckWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceCheckWachtwoordResponse
     * @throws SoapException
     */
    public function checkWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceCheckWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceCheckWachtwoordResponse
    {
        return ($this->caller)('CheckWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratieBSN $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieBSNResponse
     * @throws SoapException
     */
    public function nieuweRegistratieBSN(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieBSN $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceNieuweRegistratieBSNResponse
    {
        return ($this->caller)('NieuweRegistratieBSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLogout $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLogoutResponse
     * @throws SoapException
     */
    public function allegroWebLogout(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogout $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogoutResponse
    {
        return ($this->caller)('AllegroWebLogout', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
     * @throws SoapException
     */
    public function bSNNaarRelatieMetBedrijf(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
    {
        return ($this->caller)('BSNNaarRelatieMetBedrijf', $parameters);
    }
}
