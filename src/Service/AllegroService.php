<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Phpro\SoapClient\Exception\SoapException;

class AllegroService
{
    const SESSION_TIMEOUT = 1800;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient
     */
    private $loginService;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(string $allegroEndpoint, EntityManagerInterface $em)
    {
        $this->loginService = AllegroLoginClientFactory::factory(sprintf('%s?service=LoginService', $allegroEndpoint));
        $this->em = $em;
    }

    /**
     * @param Schuldhulpbureau $schuldHulpBureau
     * @return Schuldhulpbureau|false
     * @throws \Exception|SoapException
     */
    public function login(Schuldhulpbureau $schuldHulpBureau, $force = false)
    {
        $now = new \DateTime();
        $oldestAllowedSession = clone $now;
        $oldestAllowedSession->modify(sprintf('-%s seconds', self::SESSION_TIMEOUT));

        if (false === $force && null !== $schuldHulpBureau->getAllegroSessionId() && $schuldHulpBureau->getAllegroSessionAge() >= $oldestAllowedSession) {
            return $schuldHulpBureau;
        }
        $response = $this->loginService->allegroWebLogin((new LoginServiceAllegroWebLogin($schuldHulpBureau->getAllegroUsername(),
            $schuldHulpBureau->getAllegroPassword())));
        if ($response->getResult()) {
            $schuldHulpBureau->setAllegroSessionAge($now);
            $schuldHulpBureau->setAllegroSessionId($response->getAUserInfo()->SessionID);
            $this->em->flush();
            return $schuldHulpBureau;
        }
        $schuldHulpBureau->setAllegroSessionAge(null);
        $schuldHulpBureau->setAllegroSessionId(null);
        return false;
    }
}