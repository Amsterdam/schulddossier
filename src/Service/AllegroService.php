<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\InkomenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldArray as TypeSchuldArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldHulpServiceAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldHulpServiceGetLijstSchuldeisers as TypeSchuldHulpServiceGetLijstSchuldeisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldHulpServiceGetSRVAanvraag as TypeSchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldHulpServiceGetSRVEisers as TypeSchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SchuldHulpServiceGetSRVOverzicht as TypeSchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAanvraag2Persoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAdres;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TContact;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TInkomen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TOrganisatie as TypeTOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSchuld as TypeTSchuld;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraag as TypeTSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Event\DossierChangedEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Exception\AllegroServiceException;
use Phpro\SoapClient\Exception\SoapException;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Security;

class AllegroService
{
    const SESSION_TIMEOUT = 1800;

    const LOGGING_CONTEXT = 'allegro';

    const MAPPING_GESLACHT = [
        'Man' => 'M',
        'Vrouw' => 'V',
    ];

    /**
     * Burgerlijke staat:
     * varchar(1), Null allowed, waarden(@, A = Onbekend, B = Alleenstaand, C = Samenwonend, D = Geregistreerd partnerschap, E = Gehuwd, F = Gescheiden, G = Weduwnaar, Null)
     *
     * Gemeenschap van goederen:
     * varchar(1), Null allowed, waarden(A = Algemene gemeenschap, B = Buiten iedere gemeenschap, H = Huwelijkse voorwaarden, O = Onbekend, U = Buitenlands huwelijk)
     * Omzetting:
     * Gehuwd gemeenschap van goederen -> Burgerlijke staat = E  en Gemeenschap van goederen = A
     * Gehuwd huwelijkse voorwaarden -> Burgerlijke staat = E en Gemeenschap van goederen = H
     * Samenwonend -> Burgerlijke staat = C en Gemeenschap van goederen = O ???
     * Ongehuwd ->   Burgerlijke staat = B ??? en Gemeenschap van goederen = B ???
     */
    const MAPPING_BURGERLIJKE_STAAT = [
        'Gehuwd in gemeenschap van goederen' => ['E', 'A'],
        'Gehuwd buiten iedere gemeenschap' => ['E', 'H'],
        'Samenwonend' => ['C', 'O'],
        'Ongehuwd' => ['B', 'B'],
        'Gescheiden' => ['F', 'B'],
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
     * @throws \Exception|SoapException
     */
    public function login(Organisatie $organisatie, $force = false)
    {
        $now = new \DateTime();
        $oldestAllowedSession = clone $now;
        $oldestAllowedSession->modify(sprintf('-%s seconds', self::SESSION_TIMEOUT));

        if (
            false === $force && null !== $organisatie->getAllegroSessionId() && $organisatie->getAllegroSessionAge(
            ) >= $oldestAllowedSession
        ) {
            return $organisatie;
        }
        $response = $this->getLoginService(null, $this->proxyHostIp, $this->proxyHostPort)->allegroWebLogin(
            (new LoginServiceAllegroWebLogin(
                $organisatie->getAllegroUsername(),
                $organisatie->getAllegroPassword()
            ))
        );
        if ($response->getResult()) {
            $organisatie->setAllegroSessionAge($now);
            $organisatie->setAllegroSessionId($response->getAUserInfo()->SessionID);
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
     * @throws \Exception
     */
    public function getSRVAanvraagHeader(Organisatie $organisatie, string $relatieCode): ?TSRVAanvraagHeader
    {
        $organisatie = $this->login($organisatie);
        $schuldhulpService = $this->getSchuldHulpService($organisatie, $this->proxyHostIp, $this->proxyHostPort);
        $response = $schuldhulpService->getSRVOverzicht(
            (new TypeSchuldHulpServiceGetSRVOverzicht($relatieCode))
        );
        $result = $response->getResult();

        return $result->getTSRVAanvraagHeader();
    }

    /**
     * @param Organisatie $organisatie
     * @param TSRVAanvraagHeader $header
     * @return TypeTSRVAanvraag|null
     * @throws \Exception
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

    /**
     * @param Dossier $dossier
     * @throws \Exception
     */
    public function sendAanvraag(Dossier $dossier): bool
    {
        $organisatie = $dossier->getOrganisatie();
        $this->setSoapHeader($organisatie);

        $bedrijfsCode = 2; // Vaste waarde 2 = Kredietbank
        $aanvragerCorrespondentieMail = false;
        $aanvragerCorrespondentieWeb = false;
        $aanvraagSchuldbedrag = $dossier->getSumSchuldItemsNotInPrullenbak();

        $huisnummer = explode(' ', $dossier->getClientHuisnummer());
        $omzetting = isset(
            self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()]
        ) ? self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()] : [
            'A',
            'O',
        ];

        $kinderen = null !== $dossier->getClientKinderen() ? count($dossier->getClientKinderen()) : 0;

        $aanvragerAdres = new TAdres();

        if (null !== $dossier->getClientStraat()) {
            $aanvragerAdres->withStraat($dossier->getClientStraat());
        }

        if (null !== $dossier->getClientHuisnummer()) {
            $aanvragerAdres->withHuisnr($huisnummer[0]);
        }

        if (isset($huisnummer[1])) {
            $aanvragerAdres->withHuisnrToev($huisnummer[1]);
        }

        if (null !== $dossier->getClientPostcode()) {
            $aanvragerAdres->withPostcode($dossier->getClientPostcode());
        }

        if (null !== $dossier->getClientWoonplaats()) {
            $aanvragerAdres->withWoonplaats($dossier->getClientWoonplaats());
        }

        $this->validateDossier($dossier);

        $relatiecode = (null === $dossier->getAllegroNummer() || '' === $dossier->getAllegroNummer(
        )) ? 0 : (int) $dossier->getAllegroNummer();

        $aanvrager = new TAanvraag2Persoon();
        $aanvrager->withRelatiecode($relatiecode);
        $aanvrager->withBSN($dossier->getClientBSN());
        $aanvrager->withVoorletters($dossier->getClientVoorletters());
        $aanvrager->withAchternaam($dossier->getClientNaam());
        $aanvrager->withGeslacht(self::MAPPING_GESLACHT[$dossier->getClientGeslacht()]);
        $aanvrager->withGeboortedatum($dossier->getClientGeboortedatum()->format('Ymd'));
        $aanvrager->withNationaliteit('Leeg');
        $aanvrager->withCorrespondentieMail($aanvragerCorrespondentieMail);
        $aanvrager->withCorrespondentieWeb($aanvragerCorrespondentieWeb);
        $aanvrager->withBezoekadres($aanvragerAdres);

        if (null !== $dossier->getClientEmail() or null !== $dossier->getClientTelefoonnummer()) {
            $contact = new TContact();
            $contact->withTelefoonThuis($dossier->getClientTelefoonnummer());
            $contact->withEmailAdres($dossier->$dossier->getClientEmail());
            $aanvrager->withContact($contact);
        }

        $inkomen = $this->mapInkomen($dossier);
        $aanvrager->withInkomen($inkomen);

        // Partner
        $partner = null;
        if (!$dossier->getPartnerNvt()) {
            $partner = new TAanvraag2Persoon();
            $partner->withRelatiecode(0);
            $partner->withBSN($dossier->getPartnerBSN());
            $partner->withVoorletters($dossier->getPartnerVoorletters());
            $partner->withAchternaam($dossier->getPartnerNaam());
            $partner->withGeslacht(self::MAPPING_GESLACHT[$dossier->getPartnerGeslacht()]);
            $partner->withGeboortedatum($dossier->getPartnerGeboortedatum()->format('Ymd'));
            $partner->withNationaliteit('Leeg');
            $partner->withCorrespondentieMail(false);
            $partner->withCorrespondentieWeb(false);
        }

        $gemeenschapVanGoederen = 'Gehuwd in gemeenschap van goederen' === $dossier->getClientBurgelijkeStaat(
        ) ? 'Ja' : 'Nee';
        $kinderenInGezin = 1 >= $kinderen ? 'Ja' : 'Nee';

        $gezin = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie(
            $omzetting[0],
            $gemeenschapVanGoederen,
            $kinderenInGezin,
            new \DateTime('0001-01-01T00:00:00')
        );




        $aanvraag = new TAanvraag2SR();
        $aanvraag->withBedrijfscode($bedrijfsCode);
        $aanvraag->withAanvrager($aanvrager);
        $aanvraag->withPartner(false);
        $aanvraag->withGezinsSituatie($gezin);
        $aanvraag->withAantalKinderen($kinderen);
        $aanvraag->withSchuldbedrag($aanvraagSchuldbedrag);
        $aanvraag->withSchuldeisers(count($dossier->getSchuldItemsNotInPrullenbak()));
        $aanvraag->withGewenstKrediet(0);
        $aanvraag->withGewenstAflossing(0);
        $aanvraag->withOpdrachtgeverCode(0);
        $aanvraag->withBorgstelling(false);
        $aanvraag->withCollectieveBorgstelling(false);
        $aanvraag->withNPS($dossier->getVoorlegger()->getJongerenSchuldenvrijeStart());
        $aanvraag->withTotaalschuldVullen(false);
        $aanvraag->withOpdrachtgeverOvernemen(false);
        $aanvraag->withHulpverlenerOvernemen(false);


        $schulden = $this->mapSchulden($dossier);
        $aanvraag->withSchulden($schulden);

        if (null !== $partner) {
            $aanvraag->withPartner($partner);
        }

        //vervangen door factory

        $schuldHulpService = $this->getSchuldHulpService($organisatie, $this->proxyHostIp, $this->proxyHostPort);
        $a = $schuldHulpService->Aanvraag2SR(new SchuldHulpServiceAanvraag2SR($aanvraag));

        if (!$a->getResult()) {
            $this->logger->error(sprintf('%s - %s', $a->getExtraInfo(), $a->getExtraInfoOmschrijving()), [AllegroService::LOGGING_CONTEXT]);
        }

        $user = $this->security->getUser();
        /**
         * @var Gebruiker $user
         */

        $this->eventDispatcher->dispatch(
            new DossierChangedEvent($dossier, $user, ActionEvent::DOSSIER_SEND_TO_ALLEGRO),
            DossierChangedEvent::NAME
        );

        return $a->getResult();
    }

    private function mapInkomen(Dossier $dossier): InkomenArray
    {

        $inkomenArray = new InkomenArray();

        if ($dossier->getVoorlegger()->isBeschikkingUwvZw()) {
            $inkomen = $this->createInkomen();
            $inkomen->withSoortUitkering('ZW');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWw()) {
            $inkomen = $this->createInkomen();
            $inkomen->withSoortUitkering('WW');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWia()) {
            $inkomen = $this->createInkomen();
            $inkomen->withSoortUitkering('WIA');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWajong()) {
            $inkomen = $this->createInkomen();
            $inkomen->withSoortUitkering('Wajong');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingGemeenteAmsterdamWPI()) {
            $inkomen = $this->createInkomen();
            $inkomen->withUitkeringsInstantie('Gemeente Amsterdam');
            $inkomen->withSoortUitkering('WPI');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingSVBAOW()) {
            $inkomen = $this->createInkomen();
            $inkomen->withUitkeringsInstantie('SVB');
            $inkomen->withSoortUitkering('AOW');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingSVBANW()) {
            $inkomen = $this->createInkomen();
            $inkomen->withUitkeringsInstantie('SVB');
            $inkomen->withSoortUitkering('ANW');
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingGemeenteAmsterdamIOAW()) {
            $inkomen = $this->createInkomen();
            $inkomen->withUitkeringsInstantie('Gemeente Amsterdam');
            $inkomen->withSoortUitkering('IOAW');
            $inkomenArray->withTInkomen($inkomen);
        }

        if (null !== $dossier->getVoorlegger()->getBeschikkingUwvOverig() && strlen($dossier->getVoorlegger()->getBeschikkingUwvOverig())) {
            $inkomen = $this->createInkomen();
            $inkomen->withUitkeringsInstantie('Overig');
            $inkomen->withSoortUitkering($dossier->getVoorlegger()->getBeschikkingUwvOverig());
            $inkomenArray->withTInkomen($inkomen);
        }

        if ($dossier->getVoorlegger()->isBeschikkingInkomenUitWerk()) {
            $dienstVerbandTot = null !== $dossier->getVoorlegger()->getArbeidsovereenkomstEinddatum() ? $dossier->getVoorlegger()->getArbeidsovereenkomstEinddatum()->format('Ymd') : 0;
            $inkomen = $this->createInkomen();
            $inkomen->withSoortInkomen('Werk');
            $inkomen->withDienstVerbandTot($dienstVerbandTot);
            $inkomen->withWerkgever($dossier->getVoorlegger()->getArbeidsovereenkomstWerkgever());

            $vastDienstverband = 'Vast contract' === $dossier->getVoorlegger()->getArbeidsovereenkomstContract() ? 'Ja' : 'Nee';
            $vastDienstverband = null === $dossier->getVoorlegger()->getArbeidsovereenkomstContract() ? 'Leeg' : $vastDienstverband;

            $inkomen->withVastDienstverband($vastDienstverband);
            $inkomenArray->withTInkomen($inkomen);
        }

        return $inkomenArray;
    }

    private function mapSchulden(Dossier $dossier): TypeSchuldArray
    {
        $schuldArray = new TypeSchuldArray();

        foreach ($dossier->getSchuldItems() as $item) {
            if ($item->isVerwijderd()) {
                continue;
            }

            $codeEiser = null === $item->getSchuldeiser()->getAllegroCode(
            ) ? $this->onbekendeSchuldeiser : $item->getSchuldeiser()->getAllegroCode();

            $omschrijving = $item->getBedrag();
            if ($item->getSchuldeiser()->getAllegroCode() === $this->onbekendeSchuldeiser) {
                $omschrijving = sprintf('%s - %s', $omschrijving, $item->getToevoegingOnbekendeSchuldeiser());
                if (strlen($omschrijving) > 200) {
                    $omschrijving = sprintf('%s%s', substr($omschrijving, 0, 200), ' VOOR MEER ZIE SCHULDDOSSIER...');
                }
            }

            $schuld = new TypeTSchuld();
            $schuld->withNaam($item->getSchuldeiser()->getBedrijfsnaam());
            $schuld->withSchuld(1);
            $schuld->withOmschrijving($omschrijving);
            $schuld->withCodeEiser($codeEiser);

            if (null !== $item->getReferentie() && strlen($item->getReferentie())) {
                $schuld->withReferentie($item->getReferentie());
            }

            $schuldArray->withTSchuld($schuld);
        }

        return $schuldArray;
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
     * @throws \Exception
     */
    public function updateDossier(Dossier $dossier)
    {
        $header = $this->getSRVAanvraagHeader($dossier->getOrganisatie(), $dossier->getAllegroNummer());
        $dossier->setAllegroStatus($header->getStatus());
        $dossier->setAllegroExtraStatus($header->getExtraStatus());
        $dossier->setAllegroSyncDate((new \DateTime()));
        $this->em->flush();
    }

    private function getLoginService(
        ?Organisatie $organisatie = null,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): AllegroLoginClient {
        return LoginClientFactory::factory(
            $this->loginWsdl,
            $organisatie,
            $proxyHostIp,
            $proxyHostPort
        );
    }

    /**
     * @param Dossier $dossier
     * @throws \Exception
     */
    public function getSRVEisers(Dossier $dossier, TSRVAanvraagHeader $header): ?TSRVEisers
    {
        $schuldHulpService = $this->getSchuldHulpService($dossier->getOrganisatie());

        $aanvraagHeader = new TSRVAanvraagHeader();
        $aanvraagHeader->withRelatieCode($header->getRelatieCode());
        $aanvraagHeader->withVolgnummer($header->getVolgnummer());
        $aanvraagHeader->withIsNPS($header->getIsNPS());
        $aanvraagHeader->withStatus($header->getStatus());
        $aanvraagHeader->withStatustekst($header->getStatustekst());
        $aanvraagHeader->withAanvraagdatum($header->getAanvraagdatum());
        $aanvraagHeader->withExtraStatus($header->getExtraStatus());

        $schuldHulpServiceGetSRVEisers = new TypeSchuldHulpServiceGetSRVEisers($aanvraagHeader);

        $srvEisers = $schuldHulpService->getSRVEisers($schuldHulpServiceGetSRVEisers);
        return $srvEisers->getResult();
    }

    /**
     * @param Organisatie $organisatie
     * @throws \Exception
     */
    private function setSoapHeader(Organisatie $organisatie): void
    {
        $loginSucces = $this->login($organisatie);

        if (!$loginSucces) {
            throw new \Exception('Login of organisatie failed');
        }

        $header = new \SoapHeader(
            'http://tempuri.org/',
            'ROClientIDHeader',
            ['ID' => $organisatie->getAllegroSessionId()]
        );
        $this->altService->__setSoapHeaders($header);
    }

    /**
     * @param Dossier $dossier
     * @return bool
     * @throws AllegroServiceException
     */
    public function validateDossier(Dossier $dossier): bool
    {
        if (null === $dossier->getClientHuisnummer() || '' === $dossier->getClientHuisnummer()) {
            throw AllegroServiceException::missingClientHousenumber();
        }

        if (null === $dossier->getClientStraat() || '' === $dossier->getClientStraat()) {
            throw AllegroServiceException::missingClientStreet();
        }

        if (null === $dossier->getClientPostcode() || '' === $dossier->getClientPostcode()) {
            throw AllegroServiceException::missingClientPostalcode();
        }

        if (null === $dossier->getClientWoonplaats() || '' === $dossier->getClientWoonplaats()) {
            throw AllegroServiceException::missingClientResidence();
        }

        if (null === $dossier->getClientGeboortedatum()) {
            throw AllegroServiceException::missingClientBirthdate();
        }

        if (!isset(self::MAPPING_GESLACHT[$dossier->getClientGeslacht()])) {
            throw AllegroServiceException::missingClientGender();
        }

        if (null === $dossier->getClientBSN()) {
            throw AllegroServiceException::missingClientBSN();
        }

        if (null === $dossier->getClientVoorletters() || 0 === strlen($dossier->getClientVoorletters())) {
            throw AllegroServiceException::missingClientInitials();
        }

        if (!$dossier->getPartnerNvt()) {
            if (!isset(self::MAPPING_GESLACHT[$dossier->getPartnerGeslacht()])) {
                throw AllegroServiceException::missingPartnerGender();
            }

            if (null === $dossier->getPartnerGeboortedatum()) {
                throw AllegroServiceException::missingPartnerBirthdate();
            }
        }

        return true;
    }

    /**
     * @param Organisatie $organisatie
     * @param string $searchString
     * @throws \Exception
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

    private function createInkomen(): TInkomen
    {
        $inkomen = new TInkomen();
        $inkomen->withSoortInkomen('Uitkering');
        $inkomen->withWerkzaamSinds(0);
        $inkomen->withDienstVerbandTot(0);
        $inkomen->withLoon(1);
        $inkomen->withUitkering(0);
        $inkomen->withPensioen(0);
        $inkomen->withKGB(0);
        $inkomen->withVrijwilligers(0);
        $inkomen->withKinderAlimentatieBedrag(0);
        $inkomen->withPartnerAlimentatieBedrag(0);
        $inkomen->withOverigInkomenBedrag(0);
        $inkomen->withUitkeringsInstantie('UWV');
        return $inkomen;
    }
}
