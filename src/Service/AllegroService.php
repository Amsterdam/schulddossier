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
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\eJaNeeLeeg;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\eNationaliteit;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\eSoortInkomen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldHulpService___Aanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TSchuld;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpClientFactory;
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

    /**
     * @var SchuldHulpService
     */
    private $altService;

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


    public function __construct(
        string $allegroEndpoint,
        EntityManagerInterface $em,
        SchuldHulpService $altService,
        LoggerInterface $logger,
        EventDispatcherInterface $eventDispatcher,
        Security $security,
        $allegroOnbekendeSchuldeiser
    ) {
        $this->loginWsdl = sprintf('%s?service=LoginService', $allegroEndpoint);
        $this->schuldHulpWsdl = sprintf('%s?service=SchuldHulpService', $allegroEndpoint);
        $this->altService = $altService;
        $this->logger = $logger;
        $this->eventDispatcher = $eventDispatcher;
        $this->security = $security;
        $this->em = $em;
        $this->onbekendeSchuldeiser = (string)$allegroOnbekendeSchuldeiser;
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

    /**
     * @param Dossier $dossier
     * @throws \Exception
     */
    public function sendAanvraag(Dossier $dossier): bool
    {
        $bureau = $dossier->getSchuldhulpbureau();
        $this->setSoapHeader($bureau);

        $bedrijfsCode = 2; // Vaste waarde 2 = Kredietbank
        $aanvragerCorrespondentieMail = false;
        $aanvragerCorrespondentieWeb = false;
        $aanvraagSchuldbedrag = $dossier->getSumSchuldItemsNotInPrullenbak();

        $huisnummer = explode(' ', $dossier->getClientHuisnummer());
//
        $omzetting = isset(self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()]) ? self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()] : [
            'A',
            'O',
        ];

        $kinderen = null !== $dossier->getClientKinderen() ? count($dossier->getClientKinderen()) : 0;

        $aanvragerAdres = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAdres();

        if (null !== $dossier->getClientStraat()) {
            $aanvragerAdres->setStraat($dossier->getClientStraat());
        }

        if (null !== $dossier->getClientHuisnummer()) {
            $aanvragerAdres->setHuisnr($huisnummer[0]);
        }

        if (isset($huisnummer[1])) {
            $aanvragerAdres->setHuisnrToev($huisnummer[1]);
        }

        if (null !== $dossier->getClientPostcode()) {
            $aanvragerAdres->setPostcode($dossier->getClientPostcode());
        }

        if (null !== $dossier->getClientWoonplaats()) {
            $aanvragerAdres->setWoonplaats($dossier->getClientWoonplaats());
        }

        $this->validateDossier($dossier);

        $relatiecode = (null === $dossier->getAllegroNummer() || '' === $dossier->getAllegroNummer()) ? 0 : (int)$dossier->getAllegroNummer();

        $aanvrager = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon($relatiecode,
            $dossier->getClientBSN(), $dossier->getClientVoorletters(), $dossier->getClientNaam(),
            self::MAPPING_GESLACHT[$dossier->getClientGeslacht()],
            $dossier->getClientGeboortedatum()->format('Ymd'), eNationaliteit::Leeg, $aanvragerCorrespondentieMail,
            $aanvragerCorrespondentieWeb);

        $aanvrager->setBezoekadres($aanvragerAdres);

        // Partner

        $partner = null;
        if (!$dossier->getPartnerNvt()) {
            $partner = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon(0,
                $dossier->getPartnerBSN(), $dossier->getPartnerVoorletters(), $dossier->getPartnerNaam(),
                self::MAPPING_GESLACHT[$dossier->getPartnerGeslacht()],
                $dossier->getPartnerGeboortedatum()->format('Ymd'), eNationaliteit::Leeg, false,
                false);
        }

        $gemeenschapVanGoederen = 'Gehuwd in gemeenschap van goederen' === $dossier->getClientBurgelijkeStaat() ? 'Ja' : 'Nee';
        $kinderenInGezin = 1 >= $kinderen ? 'Ja' : 'Nee';

        $gezin = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TGezinsSituatie(
            $omzetting[0],
            $gemeenschapVanGoederen,
            $kinderenInGezin,
            new \DateTime('0001-01-01T00:00:00')
        );

        $inkomen = $this->mapInkomen($dossier);
        $aanvrager->setInkomen($inkomen);

        $aanvraag = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2SR($bedrijfsCode,
            $aanvrager, false, $gezin, $kinderen, $aanvraagSchuldbedrag,
            count($dossier->getSchuldItemsNotInPrullenbak()), 0, 0, 0,
            false, false, $dossier->getVoorlegger()->getJongerenSchuldenvrijeStart(), true, true,
            true);

        $schulden = $this->mapSchulden($dossier);
        $aanvraag->setSchulden($schulden);

        if (null !== $partner) {
            $aanvraag->setPartner($partner);
        }

        $a = $this->altService->Aanvraag2SR(new SchuldHulpService___Aanvraag2SR($aanvraag));

        if (!$a->getResult()) {
            $this->logger->error(sprintf('%s - %s', $a->getExtraInfo(), $a->getExtraInfoOmschrijving()),[AllegroService::LOGGING_CONTEXT]);
        }

        $user = $this->security->getUser();
        /**
         * @var Gebruiker $user
         */

        $this->eventDispatcher->dispatch(DossierChangedEvent::NAME, new DossierChangedEvent($dossier, $user, ActionEvent::DOSSIER_SEND_TO_ALLEGRO));

        return $a->getResult();
    }

    private function mapInkomen(Dossier $dossier): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\InkomenArray
    {
        $array = [];

        if ($dossier->getVoorlegger()->isBeschikkingUwvZw()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('UWV');
            $inkomen->setSoortUitkering('ZW');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWw()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('UWV');
            $inkomen->setSoortUitkering('WW');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWia()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('UWV');
            $inkomen->setSoortUitkering('WIA');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingUwvWajong()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('UWV');
            $inkomen->setSoortUitkering('Wajong');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingGemeenteAmsterdamWPI()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('Gemeente Amsterdam');
            $inkomen->setSoortUitkering('WPI');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingSVBAOW()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('SVB');
            $inkomen->setSoortUitkering('AOW');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingSVBANW()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('SVB');
            $inkomen->setSoortUitkering('ANW');
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingGemeenteAmsterdamIOAW()) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('Gemeente Amsterdam');
            $inkomen->setSoortUitkering('IOAW');
            $array[] = $inkomen;
        }

        if (null !== $dossier->getVoorlegger()->getBeschikkingUwvOverig() && strlen($dossier->getVoorlegger()->getBeschikkingUwvOverig())) {
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Uitkering,
                0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
            $inkomen->setUitkeringsInstantie('Overig');
            $inkomen->setSoortUitkering($dossier->getVoorlegger()->getBeschikkingUwvOverig());
            $array[] = $inkomen;
        }

        if ($dossier->getVoorlegger()->isBeschikkingInkomenUitWerk()) {
            $dienstVerbandTot = null !== $dossier->getVoorlegger()->getArbeidsovereenkomstEinddatum() ? $dossier->getVoorlegger()->getArbeidsovereenkomstEinddatum()->format('Ymd') : 0;
            $inkomen = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TInkomen(eSoortInkomen::Werk,
                0, $dienstVerbandTot, 0, 0, 0, 0, 0, 0, 0, 0);
            $inkomen->setWerkgever($dossier->getVoorlegger()->getArbeidsovereenkomstWerkgever());

            $vastDienstverband = 'Vast contract' === $dossier->getVoorlegger()->getArbeidsovereenkomstContract() ? eJaNeeLeeg::Ja : eJaNeeLeeg::Nee;
            $vastDienstverband = null === $dossier->getVoorlegger()->getArbeidsovereenkomstContract() ? eJaNeeLeeg::Leeg : $vastDienstverband;

            $inkomen->setVastDienstverband($vastDienstverband);
            $array[] = $inkomen;
        }

        $inkomenArray = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\InkomenArray();
        $inkomenArray->setTInkomen($array);

        return $inkomenArray;
    }

    private function mapSchulden(Dossier $dossier): SchuldArray
    {
        $array = [];

        foreach ($dossier->getSchuldItems() as $item) {
            if ($item->isVerwijderd()) {
                continue;
            }

            $codeEiser = null === $item->getSchuldeiser()->getAllegroCode() ? $this->onbekendeSchuldeiser : $item->getSchuldeiser()->getAllegroCode();

            $omschrijving = $item->getBedrag();
            if ($item->getSchuldeiser()->getAllegroCode() === $this->onbekendeSchuldeiser) {
                $omschrijving = sprintf('%s - %s', $omschrijving, $item->getToevoegingOnbekendeSchuldeiser());
                if (strlen($omschrijving) > 200) {
                    $omschrijving = sprintf('%s%s', substr($omschrijving, 0, 200), ' VOOR MEER ZIE SCHULDDOSSIER...');
                }
            }

            $schuld = new TSchuld($item->getSchuldeiser()->getBedrijfsnaam(), 1, $omschrijving, $codeEiser);

            if (null !== $item->getReferentie() && strlen($item->getReferentie())) {
                $schuld->setReferentie($item->getReferentie());
            }

            $array[] = $schuld;
        }

        $schuldArray = new \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldArray();
        $schuldArray->setTSchuld($array);

        return $schuldArray;
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
    public function getSBOverzicht(Dossier $dossier)
    {
        return $this->getSchuldHulpService($dossier->getSchuldhulpbureau())->getSBOverzicht((new SchuldHulpServiceGetSBOverzicht($dossier->getAllegroNummer())));
    }

    /**
     * @param Schuldhulpbureau $bureau
     * @throws \Exception
     */
    private function setSoapHeader(Schuldhulpbureau $bureau): void
    {
        $this->login($bureau);
        $header = new \SoapHeader('http://tempuri.org/', 'ROClientIDHeader', ['ID' => $bureau->getAllegroSessionId()]);
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