<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Service;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LoginServiceAllegroWebLogin;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginClientFactory;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpClientFactory;
use Phpro\SoapClient\Exception\SoapException;

class AllegroService
{
    const SESSION_TIMEOUT = 1800;

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

    const TYPE_INKOMEN_WERK = 'Werk';
    const TYPE_INKOMEN_UITKERING = 'Uitkering';
    const TYPE_INKOMEN_COMBINATIE_WERK_UITKERING = 'Combinatie_werk_en_uitkering';
    const TYPE_INKOMEN_STUDIEFINANCIERING = 'Studiefinanciering';
    const TYPE_INKOMEN_PENSIOEN = 'Pensioen';
    const TYPE_INKOMEN_COMBINATIE_PENSIOEN_UITKERING = 'Combinatie_pensioen_en_uitkering';
    const TYPE_INKOMEN_COMBINATIE_WERK_PENSIOEN = 'Combinatie_werk_en_pensioen';
    const TYPE_INKOMEN_COMBINATIE_WERK_UITKERING_PENSIOEN = 'Combinatie_werk_en_uitkering_en_pensioen';

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

    public function sendAanvraag(Dossier $dossier)
    {
        $bureau = $dossier->getSchuldhulpbureau();
        $bureau = $this->login($bureau);

        /**
         * Aannames
         */

        /* Aanvraag */
        $bedrijfsCode = 2; // Vaste waarde 2 = Kredietbank

        /* Aanvrager */
        $aanvragerVoornaam = ''; // Voorletters
        $aanvragerVoorvoegsels = ''; // Keuze maken uiterlijk 3-2-2020
        $aanvragerNationaliteit = 'Leeg'; // Uit enumeratie
        $aanvragerAdresLandWoonachtig = '';
        $aanvragerCorrespondentieMail = false;
        $aanvragerCorrespondentieWeb = false;
        $aanvraagSchuldbedrag = $dossier->getSumSchuldItemsNotInPrullenbak();

        /**
         * Verzoek:  varchar(25), Null allowed, waarde bij voorkeur als <kengetal>-<aansluitnummer> (eisen vanuit automatische SMS-berichten???)
         *
         * Op dit moment wordt er niks afgedwongen in het systeem over structuur van telefoonnummers, ook is het niet bekend of een telefoonnummer vast of mobiel is.
         */
        $aanvragerTelefoonnummer = $dossier->getClientTelefoonnummer(); // Regex bepalen mobiel, indien beide leeg lege string
        $aanvragerMobiel = $dossier->getClientTelefoonnummer();
        $aanvragerEmail = ''; // Leeg

        /* Gezin */
        $gemeenschapVanGoederenDetail = ''; // Leeg
        $toelichtingKinderen = '';

        /**
         * Toevoegingen 31-1-2020
         *
         * ToelichtingAlgemeen = Concat op basis van excel documentatie
         * TotaalschuldVullen = true
         * OpdrachtgeverOvernemen = true
         * OpdrachtgeverOvernemen = true
         * OpenVragen = leeg
         * GeslotenVragen = leeg
         *
         * Tschuld:
         * Studieschuld = false
         * CodeEiser = Allegro code schuldeiser
         *
         * Taanvraag2:
         * SoortLening = lege string
         * GewenstKrediet = 0
         * Bestedingsdoel = lege string
         * Indiener = lege string
         * HulpverlenerNaam = lege string
         *
         * Opdrachtgevercode MADI: opnemen in het systeem? terugkoppeling 3-1-2020
         * KredietSoort = lege string
         * Borgstelling = true
         * CollectieveBorgstelling = false
         * OverigeGegevens = leeg
         */


        /**
         * Einde aannames
         */

        $huisnummer = explode(' ', $dossier->getClientHuisnummer());
        $postcode = explode(' ', $dossier->getClientPostcode());


        $aanvragerAdres = new TAdres(
            $dossier->getClientStraat(),
            $huisnummer[0],
            isset($huisnummer[1]) ? $huisnummer[1] : null,
            $dossier->getClientPostcode(),
            $postcode[0],
            isset($postcode[1]) ? $postcode[1] : null,
            $dossier->getClientWoonplaats(),
            $aanvragerAdresLandWoonachtig
        );

        $aanvragerContact = new TContact(
            $aanvragerTelefoonnummer,
            $aanvragerMobiel,
            $aanvragerEmail
        );

        $inkomen = $this->mapInkomen($dossier);

        $inkomenArray = new InkomenArray();

        $aanvrager = new TAanvraag2Persoon(
            $dossier->getAllegroNummer(),
            $dossier->getClientBSN(),
            $aanvragerVoornaam,
            $dossier->getClientVoorletters(),
            $aanvragerVoorvoegsels,
            $dossier->getClientNaam(),
            in_array($dossier->getClientGeslacht(),
                self::MAPPING_GESLACHT) ? self::MAPPING_GESLACHT[$dossier->getClientGeslacht()] : null,
            null != $dossier->getClientGeboortedatum() ? $dossier->getClientGeboortedatum()->format('Ymd') : 0,
            $aanvragerNationaliteit,
            [],
            $aanvragerAdres,
            $aanvragerAdres,
            $aanvragerCorrespondentieMail,
            $aanvragerCorrespondentieWeb,
            $aanvragerContact,
            [],
            []
        );

        $omzetting = isset(self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()]) ? self::MAPPING_BURGERLIJKE_STAAT[$dossier->getClientBurgelijkeStaat()] : ['A', 'O'];

        $kinderen = null !== $dossier->getClientKinderen() ? count($dossier->getClientKinderen()) : 0;

        $gezin = new TGezinsSituatie(
            $omzetting[0],
            $omzetting[1],
            $gemeenschapVanGoederenDetail,
            $kinderen
        );

        $aanvraag = new TAanvraag2(
            $bedrijfsCode,
            $aanvrager,
            false,
            null,
            $gezin,
            $toelichtingKinderen
        );

        $response = $this->getSchuldHulpService($bureau)->aanvraag2SR((new SchuldHulpServiceAanvraag2SR($aanvraag)));
    }

    private function mapInkomen(Dossier $dossier): InkomenArray {
        $array = new InkomenArray();

        if ($dossier->getVoorlegger()->isBeschikkingUwvZw()) {
            $inkomen = new TInkomen(self::TYPE_INKOMEN_UITKERING);
        }

        return $array;
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
}