<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use DateTime;
use Exception;
use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\SchuldHulpUpdatedClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\SchuldHulpUpdatedClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetLijstSchuldeisers as TypeSchuldHulpServiceGetLijstSchuldeisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVAanvraag as TypeSchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVEisers as TypeSchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\SchuldHulpServiceGetSRVOverzicht as TypeSchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TOrganisatie as TypeTOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraag as TypeTSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use Phpro\SoapClient\Exception\SoapException;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Bundle\SecurityBundle\Security;

class AllegroService
{
    const SESSION_TIMEOUT = 1800;

    const LOGGING_CONTEXT = 'allegro';

    const MAPPING_GESLACHT = [
        'Man' => 'M',
        'Vrouw' => 'V',
    ];

    /**
     * @var string
     */
    private $loginWsdl;

    /**
     * @var string
     */
    private $schuldHulpWsdl;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var Security
     */
    private $security;

    /**
     * @var string
     */
    private $onbekendeSchuldeiser;

    /**
     * @var ?string
     */
    private $proxyHostIp;

    /**
     * @var ?string
     */
    private $proxyHostPort;


    public function __construct(
        string $allegroEndpoint,
        EntityManagerInterface $em,
        LoggerInterface $logger,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        $allegroOnbekendeSchuldeiser,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null,
    ) {
        $this->loginWsdl = sprintf('%s?service=LoginService', $allegroEndpoint);
        $this->schuldHulpWsdl = sprintf('%s?service=SchuldHulpService', $allegroEndpoint);
        $this->logger = $logger;
        $this->eventDispatcher = $eventDispatcher;
        $this->security = $security;
        $this->em = $em;
        $this->onbekendeSchuldeiser = (string) $allegroOnbekendeSchuldeiser;
        $this->proxyHostIp = $proxyHostIp;
        $this->proxyHostPort = $proxyHostPort;
    }

    /**
     * @param Organisatie $organisatie
     * @return Organisatie|false
     * @throws Exception|SoapException
     */
    public function login(Organisatie $organisatie, $force = false)
    {
        $now = new DateTime();
        $oldestAllowedSession = clone $now;
        $oldestAllowedSession->modify(sprintf('-%s seconds', self::SESSION_TIMEOUT));

        if (
            false === $force && null !== $organisatie->getAllegroSessionId() && $organisatie->getAllegroSessionAge(
            ) >= $oldestAllowedSession
        ) {
            return $organisatie;
        }

        $loginService = $this->getLoginService($this->proxyHostIp, $this->proxyHostPort);
        $response =  $loginService->allegroWebLogin(
            (new LoginServiceAllegroWebLogin(
                $organisatie->getAllegroUsername(),
                $organisatie->getAllegroPassword()
            ))
        );
        if ($response->getResult()) {
            $organisatie->setAllegroSessionAge($now);

            $aUserInfo = $response->getAUserInfo();

            $organisatie->setAllegroSessionId($aUserInfo->getSessionId());
            $this->em->flush();

            return $organisatie;
        }
        $organisatie->setAllegroSessionAge(null);
        $organisatie->setAllegroSessionId(null);

        return false;
    }

    /**
     * @param Organisatie $organisatie
     * @param string $relatieCode
     * @return TSRVAanvraagHeader|null
     * @throws Exception
     */
    public function getSRVAanvraagHeader(Organisatie $organisatie, string $relatieCode): ?TSRVAanvraagHeader
    {
        $organisatie = $this->login($organisatie);
        $schuldhulpService = $this->getSchuldHulpService($organisatie, $this->proxyHostIp, $this->proxyHostPort);
        $response = $schuldhulpService->getSRVOverzicht(
            (new TypeSchuldHulpServiceGetSRVOverzicht($relatieCode))
        );

        /** @var array $result */
        $result = $response->getResult()->getTSRVAanvraagHeader();

        /**
         * There should be one aanvraag for a person at the same time
         * @var TSRVAanvraagHeader $SRVaanvraagheader */
        $SRVaanvraagheader = $result[0];

        return $SRVaanvraagheader;
    }

    /**
     * @param Organisatie $organisatie
     * @param TSRVAanvraagHeader $header
     * @return TSRVAanvraag|null
     * @throws Exception
     */
    public function getSRVAanvraag(Organisatie $organisatie, TSRVAanvraagHeader $header): ?TypeTSRVAanvraag
    {
        $organisatie = $this->login($organisatie);
        $schuldhulpService = $this->getSchuldHulpService($organisatie, $this->proxyHostIp, $this->proxyHostPort);
        $response = $schuldhulpService->getSRVAanvraag(
            (new TypeSchuldHulpServiceGetSRVAanvraag($header))
        );

        return $response->getResult();
    }

   
    private function getSchuldHulpService(
        Organisatie $organisatie,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): SchuldHulpUpdatedClient {
        return SchuldHulpUpdatedClientFactory::factory(
            $this->schuldHulpWsdl,
            $organisatie,
            $proxyHostIp,
            $proxyHostPort
        );
    }

    /**
     * @param Dossier $dossier
     * @throws Exception
     */
    public function updateDossier(Dossier $dossier)
    {
        $header = $this->getSRVAanvraagHeader($dossier->getOrganisatie(), $dossier->getAllegroNummer());
        $dossier->setAllegroStatus($header->getStatus());
        $dossier->setAllegroExtraStatus($header->getExtraStatus());
        $dossier->setAllegroSyncDate((new DateTime()));
        $this->em->flush();
    }

    private function getLoginService(
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): LoginServiceClient {
        return LoginServiceClientFactory::factory(
            $this->loginWsdl,
            $proxyHostIp,
            $proxyHostPort
        );
    }

    /**
     * @param Dossier $dossier
     * @throws Exception
     */
    public function getSRVEisers(Dossier $dossier, TSRVAanvraagHeader $header): ?TSRVEisers
    {
        $aanvraagHeader = new TSRVAanvraagHeader();
        $aanvraagHeader = $aanvraagHeader->withRelatieCode($header->getRelatieCode());
        $aanvraagHeader = $aanvraagHeader->withVolgnummer($header->getVolgnummer());
        $aanvraagHeader = $aanvraagHeader->withIsNPS($header->getIsNPS());
        $aanvraagHeader = $aanvraagHeader->withStatus($header->getStatus());
        $aanvraagHeader = $aanvraagHeader->withStatustekst($header->getStatustekst());
        $aanvraagHeader = $aanvraagHeader->withAanvraagdatum($header->getAanvraagdatum());
        $aanvraagHeader = $aanvraagHeader->withExtraStatus($header->getExtraStatus());

        $schuldHulpServiceGetSRVEisers = new TypeSchuldHulpServiceGetSRVEisers($aanvraagHeader);

        $schuldHulpService = $this->getSchuldHulpService($dossier->getOrganisatie());
        $srvEisers = $schuldHulpService->getSRVEisers($schuldHulpServiceGetSRVEisers);
        return $srvEisers->getResult();
    }

    /**
     * @param Organisatie $organisatie
     * @param string $searchString
     * @throws Exception
     */
    public function syncSchuldeisers(Organisatie $organisatie, $searchString = ''): array
    {
        /** @var TypeTOrganisatie[] $allegroSchuldeisers */
        $allegroSchuldeisers = $this->getAllegroSchuldeisers($organisatie, $searchString);

        $statistics = ['created' => 0, 'updated' => 0, 'made-inactive' => 0, 'made-active' => 0];
        if (!isset($allegroSchuldeisers)) {
            return $statistics;
        }

        // Fetch all existing schuldeisers and index them by allegroCode
        $schulddossierSchuldeisers = $this->em->getRepository(Schuldeiser::class)->findAll();
        $existingSchuldeisers = [];
        foreach ($schulddossierSchuldeisers as $schuldeiser) {
            $existingSchuldeisers[$schuldeiser->getAllegroCode()] = $schuldeiser;
        }

        // Index Allegro schuldeisers by relatieCode for quick lookup
        $allegroSchuldeisersByCode = [];
        foreach ($allegroSchuldeisers as $allegroSchuldeiser) {
            $allegroSchuldeisersByCode[$allegroSchuldeiser->getRelatieCode()] = $allegroSchuldeiser;
        }

        // Process Allegro schuldeisers
        foreach ($allegroSchuldeisersByCode as $relatieCode => $allegroSchuldeiser) {
            if (!isset($existingSchuldeisers[$relatieCode])) {
                // Add new schuldeiser
                $eiser = new Schuldeiser();
                $eiser->setAllegroCode($relatieCode);
                $eiser->setRekening('');
                $eiser->setEnabled(true);
                $eiser = $this->updateSchuldeiser($eiser, $allegroSchuldeiser);
                $statistics['created']++;
                $this->em->persist($eiser);
            } else {
                // Update existing schuldeiser
                $eiser = $existingSchuldeisers[$relatieCode];
                $eiser = $this->updateSchuldeiser($eiser, $allegroSchuldeiser);
                $statistics['updated']++;
            }
        }

        // Disable schuldeisers not in Allegro
        foreach ($existingSchuldeisers as $relatieCode => $schuldeiser) {
            if (!isset($allegroSchuldeisersByCode[$relatieCode])) {
                if ($schuldeiser->isEnabled()) {
                    $schuldeiser->setEnabled(false);
                    $statistics['made-inactive']++;
                }
            } else {
                if (!$schuldeiser->isEnabled()) {
                    $schuldeiser->setEnabled(true);
                    $statistics['made-active']++;
                }
            }
        }

        $this->em->flush();

        return $statistics;
    }

    /**
     * @param Organisatie $organisatie
     * @param string $searchString
     * @return TypeTOrganisatie[] Array of TOrganisatie objects
     */
    private function getAllegroSchuldeisers(
        Organisatie $organisatie,
        $searchString = ''
    ): array {
        $organisatie = $this->login($organisatie);
        $parameters = new TypeSchuldHulpServiceGetLijstSchuldeisers($searchString);
        $schuldhulpService = $this->getSchuldHulpService($organisatie);
        $response = $schuldhulpService->getLijstSchuldeisers($parameters);

        /** @var TypeTOrganisatie[] $allegroSchuldeisers */
        $allegroSchuldeisers = $response->getResult()->getTOrganisatie();

        return $allegroSchuldeisers;
    }

    /**
     * Updates the given Schuldeiser with data from the provided TOrganisatie.
     *
     * @param Schuldeiser $schuldeiser The Schuldeiser object to update.
     * @param TypeTOrganisatie $allegroSchuldeiser The TOrganisatie object containing the updated data.
     * @return Schuldeiser The updated Schuldeiser object.
     */
    private function updateSchuldeiser(
        Schuldeiser $schuldeiser,
        TypeTOrganisatie $allegroSchuldeiser
    ): Schuldeiser {

        $adres = $allegroSchuldeiser->getPostAdres();
        $schuldeiser->setBedrijfsnaam($allegroSchuldeiser->getNaam());
        $schuldeiser->setPlaats($adres->getWoonplaats());
        $schuldeiser->setHuisnummer($adres->getHuisnr());
        $schuldeiser->setHuisnummerToevoeging($adres->getHuisnrToev());
        $schuldeiser->setPostcode(substr(strtoupper(str_replace(' ', '', $adres->getPostcode())), 0, 6));
        $schuldeiser->setStraat($adres->getStraat());

        return $schuldeiser;
    }
}
