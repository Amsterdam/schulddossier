<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceAllegroWebLogin implements RequestInterface
{
    /**
     * @var string
     */
    private $aUsername;

    /**
     * @var string
     */
    private $aPassword;

    /**
     * Constructor
     *
     * @var string $aUsername
     * @var string $aPassword
     */
    public function __construct($aUsername, $aPassword)
    {
        $this->aUsername = $aUsername;
        $this->aPassword = $aPassword;
    }

    /**
     * @return string
     */
    public function getAUsername()
    {
        return $this->aUsername;
    }

    /**
     * @param string $aUsername
     * @return LoginServiceAllegroWebLogin
     */
    public function withAUsername($aUsername)
    {
        $new = clone $this;
        $new->aUsername = $aUsername;

        return $new;
    }

    /**
     * @return string
     */
    public function getAPassword()
    {
        return $this->aPassword;
    }

    /**
     * @param string $aPassword
     * @return LoginServiceAllegroWebLogin
     */
    public function withAPassword($aPassword)
    {
        $new = clone $this;
        $new->aPassword = $aPassword;

        return $new;
    }
}
