<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
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

    /**
     * @param Schuldhulpbureau $bureau
     * @param TSRVAanvraagHeader $header
     * @return TSRVAanvraag|null
     * @throws \Exception
     */
    public function getSRVAanvraag(Schuldhulpbureau $bureau, TSRVAanvraagHeader $header): ?TSRVAanvraag
    {
        $bureau = $this->login($bureau);
        $response = $this->getSchuldHulpService($bureau)->getSRVAanvraag((new SchuldHulpServiceGetSRVAanvraag($header)));

        return $response->getResult();
    }

    private function getSchuldHulpService(Schuldhulpbureau $bureau): AllegroSchuldHulpClient
    {
        return SchuldHulpClientFactory::factory($this->schuldHulpWsdl, $bureau);
    }

    /**
     * @param Dossier $dossier
     * @throws \Exception
     */
    public function updateDossier(Dossier $dossier)
    {
        $header = $this->getSRVAanvraagHeader($dossier->getSchuldhulpbureau(), $dossier->getAllegroNummer());
        $dossier->setAllegroStatus($header->getStatus());
        $dossier->setAllegroExtraStatus($header->getExtraStatus());
        $dossier->setAllegroSyncDate((new \DateTime()));
        $this->em->flush();
    }

    private function getLoginService(Schuldhulpbureau $bureau = null): AllegroLoginClient
    {
        return LoginClientFactory::factory($this->loginWsdl, $bureau);
    }

    /**
     * @param Dossier $dossier
     * @throws \Exception
     */
    public function getSRVEisers(Dossier $dossier, TSRVAanvraagHeader $header): ?TSRVEisers
    {
        return $this->getSchuldHulpService($dossier->getSchuldhulpbureau())->getSRVEisers((new SchuldHulpServiceGetSRVEisers((new TSRVAanvraagHeader($header->getRelatieCode(),
            $header->getVolgnummer(), $header->getIsNPS(), $header->getStatus(), $header->getStatustekst(),
            $header->getAanvraagdatum(), $header->getExtraStatus())))))->getResult();
    }

    /**
     * @param Dossier $dossier
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzichtResponse|\Phpro\SoapClient\Type\ResultInterface
     */
    public function getSBOverzicht(Dossier $dossier) {
        return $this->getSchuldHulpService($dossier->getSchuldhulpbureau())->getSBOverzicht((new SchuldHulpServiceGetSBOverzicht($dossier->getAllegroNummer())));
    }

    /**
     * @param Schuldhulpbureau $bureau
     * @param string $searchString
     * @throws \Exception
     */
    public function syncSchuldeisers(Schuldhulpbureau $bureau, $searchString = ''): array {
        $bureau = $this->login($bureau);
        $parameters = new SchuldHulpServiceGetLijstSchuldeisers($searchString);
        $response = $this->getSchuldHulpService($bureau)->getLijstSchuldeisers($parameters);
        $statistics = ['created' => 0, 'updated' => 0];

        if (null === $response->getResult()->getTOrganisatie()) {
            return $statistics;
        }

        $repo = $this->em->getRepository(Schuldeiser::class);

        foreach ($response->getResult()->getTOrganisatie() as $organisatie) {
            /**
             * @var TOrganisatie $organisatie
             */
            $eiser = $repo->findOneBy(['allegroCode'=>$organisatie->getRelatieCode()]);

            if (null === $eiser) {
                $statistics['created'] ++;
                $eiser = new Schuldeiser();
                $eiser->setAllegroCode($organisatie->getRelatieCode());
                $eiser->setEnabled(true);
                $eiser->setRekening('');
                $this->em->persist($eiser);
            } else {
                $statistics['updated'] ++;
            }

            $adres = $organisatie->getPostAdres();

            $eiser->setBedrijfsnaam($organisatie->getNaam());
            $eiser->setPlaats($adres->getWoonplaats());
            $eiser->setHuisnummer($adres->getHuisnr());
            $eiser->setHuisnummerToevoeging($adres->getHuisnrToev());
            $eiser->setPostcode(substr(strtoupper(str_replace(' ', '', $adres->getPostcode())),0,6));
            $eiser->setStraat($adres->getStraat());
        }

        $this->em->flush();

        return $statistics;
    }
}