<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class AllegroLoginClient extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLogin $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginResponse
     * @throws SoapException
     */
    public function allegroWebLogin(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginResponse
    {
        return $this->call('AllegroWebLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebMagAanmelden $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebMagAanmeldenResponse
     * @throws SoapException
     */
    public function allegroWebMagAanmelden(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebMagAanmelden $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebMagAanmeldenResponse
    {
        return $this->call('AllegroWebMagAanmelden', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLoginTijdelijk $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginTijdelijkResponse
     * @throws SoapException
     */
    public function allegroWebLoginTijdelijk(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginTijdelijk $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginTijdelijkResponse
    {
        return $this->call('AllegroWebLoginTijdelijk', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatie $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieResponse
     * @throws SoapException
     */
    public function bSNNaarRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieResponse
    {
        return $this->call('BSNNaarRelatie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceGenereerWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceGenereerWachtwoordResponse
     * @throws SoapException
     */
    public function genereerWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceGenereerWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceGenereerWachtwoordResponse
    {
        return $this->call('GenereerWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieResponse
     * @throws SoapException
     */
    public function nieuweRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieResponse
    {
        return $this->call('NieuweRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceActiveerRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceActiveerRegistratieResponse
     * @throws SoapException
     */
    public function activeerRegistratie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceActiveerRegistratie $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceActiveerRegistratieResponse
    {
        return $this->call('ActiveerRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuwContact $parameters
     * @return ResultInterface|Type\LoginServiceNieuwContactResponse
     * @throws SoapException
     */
    public function nieuwContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuwContact $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuwContactResponse
    {
        return $this->call('NieuwContact', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceCheckWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceCheckWachtwoordResponse
     * @throws SoapException
     */
    public function checkWachtwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceCheckWachtwoord $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceCheckWachtwoordResponse
    {
        return $this->call('CheckWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratieBSN $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieBSNResponse
     * @throws SoapException
     */
    public function nieuweRegistratieBSN(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieBSN $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieBSNResponse
    {
        return $this->call('NieuweRegistratieBSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceLogout $parameters
     * @return ResultInterface|Type\LoginServiceLogoutResponse
     * @throws SoapException
     */
    public function logout(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceLogout $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceLogoutResponse
    {
        return $this->call('Logout', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
     * @throws SoapException
     */
    public function bSNNaarRelatieMetBedrijf(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
    {
        return $this->call('BSNNaarRelatieMetBedrijf', $parameters);
    }
}
