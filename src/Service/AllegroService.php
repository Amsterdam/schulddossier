<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpClientFactory;
use Phpro\SoapClient\Exception\SoapException;

class AllegroService
{
    const SESSION_TIMEOUT = 1800;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient
     */
    private $loginService;

    /**
     * @var string
     */
    private $schuldHulpWsdl;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(string $allegroEndpoint, EntityManagerInterface $em)
    {
        $this->loginWsdl = sprintf('%s?service=LoginService', $allegroEndpoint);
        $this->schuldHulpWsdl = sprintf('%s?service=SchuldHulpService', $allegroEndpoint);

        $this->em = $em;
    }

    /**
     * @param Schuldhulpbureau $bureau
     * @return Schuldhulpbureau|false
     * @throws \Exception|SoapException
     */
    public function login(Schuldhulpbureau $bureau, $force = false)
    {
        $now = new \DateTime();
        $oldestAllowedSession = clone $now;
        $oldestAllowedSession->modify(sprintf('-%s seconds', self::SESSION_TIMEOUT));

        if (false === $force && null !== $bureau->getAllegroSessionId() && $bureau->getAllegroSessionAge() >= $oldestAllowedSession) {
            return $bureau;
        }
        $response = $this->getLoginService()->allegroWebLogin((new LoginServiceAllegroWebLogin($bureau->getAllegroUsername(),
            $bureau->getAllegroPassword())));
        if ($response->getResult()) {
            $bureau->setAllegroSessionAge($now);
            $bureau->setAllegroSessionId($response->getAUserInfo()->SessionID);
            $this->em->flush();

            return $bureau;
        }
        $bureau->setAllegroSessionAge(null);
        $bureau->setAllegroSessionId(null);

        return false;
    }

    /**
     * @param Schuldhulpbureau $bureau
     * @param string $relatieCode
     * @return TSRVAanvraagHeader|null
     * @throws \Exception
     */
    public function getSRVAanvraagHeader(Schuldhulpbureau $bureau, string $relatieCode): ?TSRVAanvraagHeader
    {
        $bureau = $this->login($bureau);
        $response = $this->getSchuldHulpService($bureau)->getSRVOverzicht((new SchuldHulpServiceGetSRVOverzicht($relatieCode)));
        return $response->getResult()->getTSRVAanvraagHeader()[0];
    }

    private function getSchuldHulpService(Schuldhulpbureau $bureau): AllegroSchuldHulpClient
    {
        return SchuldHulpClientFactory::factory($this->schuldHulpWsdl, $bureau);
    }

    private function getLoginService(Schuldhulpbureau $bureau = null): AllegroLoginClient
    {
        return LoginClientFactory::factory($this->loginWsdl, $bureau);
    }
}