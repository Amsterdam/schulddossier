<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login;

use Phpro\SoapClient\Client;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebMagAanmelden;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebMagAanmeldenResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginTijdelijk;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLoginTijdelijkResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceGenereerWachtwoord;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceGenereerWachtwoordResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceActiveerRegistratie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceActiveerRegistratieResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuwContact;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuwContactResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceCheckWachtwoord;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceCheckWachtwoordResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieBSN;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceNieuweRegistratieBSNResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceLogout;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceLogoutResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieMetBedrijf;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceBSNNaarRelatieMetBedrijfResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class AllegroLoginClient extends Client
{

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLogin $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginResponse
     * @throws SoapException
     */
    public function allegroWebLogin(LoginServiceAllegroWebLogin $parameters) : LoginServiceAllegroWebLoginResponse
    {
        return $this->call('AllegroWebLogin', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebMagAanmelden $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebMagAanmeldenResponse
     * @throws SoapException
     */
    public function allegroWebMagAanmelden(LoginServiceAllegroWebMagAanmelden $parameters) : LoginServiceAllegroWebMagAanmeldenResponse
    {
        return $this->call('AllegroWebMagAanmelden', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceAllegroWebLoginTijdelijk $parameters
     * @return ResultInterface|Type\LoginServiceAllegroWebLoginTijdelijkResponse
     * @throws SoapException
     */
    public function allegroWebLoginTijdelijk(LoginServiceAllegroWebLoginTijdelijk $parameters) : LoginServiceAllegroWebLoginTijdelijkResponse
    {
        return $this->call('AllegroWebLoginTijdelijk', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatie $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieResponse
     * @throws SoapException
     */
    public function bSNNaarRelatie(LoginServiceBSNNaarRelatie $parameters) : LoginServiceBSNNaarRelatieResponse
    {
        return $this->call('BSNNaarRelatie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceGenereerWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceGenereerWachtwoordResponse
     * @throws SoapException
     */
    public function genereerWachtwoord(LoginServiceGenereerWachtwoord $parameters) : LoginServiceGenereerWachtwoordResponse
    {
        return $this->call('GenereerWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieResponse
     * @throws SoapException
     */
    public function nieuweRegistratie(LoginServiceNieuweRegistratie $parameters) : LoginServiceNieuweRegistratieResponse
    {
        return $this->call('NieuweRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceActiveerRegistratie $parameters
     * @return ResultInterface|Type\LoginServiceActiveerRegistratieResponse
     * @throws SoapException
     */
    public function activeerRegistratie(LoginServiceActiveerRegistratie $parameters) : LoginServiceActiveerRegistratieResponse
    {
        return $this->call('ActiveerRegistratie', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuwContact $parameters
     * @return ResultInterface|Type\LoginServiceNieuwContactResponse
     * @throws SoapException
     */
    public function nieuwContact(LoginServiceNieuwContact $parameters) : LoginServiceNieuwContactResponse
    {
        return $this->call('NieuwContact', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceCheckWachtwoord $parameters
     * @return ResultInterface|Type\LoginServiceCheckWachtwoordResponse
     * @throws SoapException
     */
    public function checkWachtwoord(LoginServiceCheckWachtwoord $parameters) : LoginServiceCheckWachtwoordResponse
    {
        return $this->call('CheckWachtwoord', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceNieuweRegistratieBSN $parameters
     * @return ResultInterface|Type\LoginServiceNieuweRegistratieBSNResponse
     * @throws SoapException
     */
    public function nieuweRegistratieBSN(LoginServiceNieuweRegistratieBSN $parameters) : LoginServiceNieuweRegistratieBSNResponse
    {
        return $this->call('NieuweRegistratieBSN', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceLogout $parameters
     * @return ResultInterface|Type\LoginServiceLogoutResponse
     * @throws SoapException
     */
    public function logout(LoginServiceLogout $parameters) : LoginServiceLogoutResponse
    {
        return $this->call('Logout', $parameters);
    }

    /**
     * @param RequestInterface|Type\LoginServiceBSNNaarRelatieMetBedrijf $parameters
     * @return ResultInterface|Type\LoginServiceBSNNaarRelatieMetBedrijfResponse
     * @throws SoapException
     */
    public function bSNNaarRelatieMetBedrijf(LoginServiceBSNNaarRelatieMetBedrijf $parameters) : LoginServiceBSNNaarRelatieMetBedrijfResponse
    {
        return $this->call('BSNNaarRelatieMetBedrijf', $parameters);
    }


}

