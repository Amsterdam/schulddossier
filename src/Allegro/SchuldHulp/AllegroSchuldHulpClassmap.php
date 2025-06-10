<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTest;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\AWUserInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVA;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusPVAProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVEiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSB;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPL;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutaties;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDKHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDK;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdracht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBROpdrachten;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReservering;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSMutatiesPeriode;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSaldoReserveringen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanmelding;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGezinsSituatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TJaNeeVraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraak;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TKind;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TProductExtra;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectTaak;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContractenLijst;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschrift;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReservering;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriften;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftMutaties;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPRSAfschriftReserveringen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\THulpverlener;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContactpersoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusToelichting;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpdrachtgeverKlant;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTraject;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRVorm;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPersoonAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TInkomen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TUitgaven;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBijlage;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatieProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagLening;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagDK;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstOpdrachtgever;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TLijstKredietsoort;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSchuld;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAllegroDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TDocumentSleutel;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRC;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxDetail;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxTekst;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBRBegunstigde;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRelatiecodeBedrijfcode;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Persoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2Lening;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2DK;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraagSR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameter;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameter;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResult;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDelta;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChange;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UserInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfoV5;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ColumnSorting;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfoV6;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResultEx;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TestArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\IntegerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAProductArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BooleanArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVAanvraagHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SRVEiserArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBEiserArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SBHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PLHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DKHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBROpdrachtArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SaldoReserveringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TeamArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\KindArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectTaakArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OrganisatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\AfspraakArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContractArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftMutatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftReseveringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusDeelopdrachtArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\HulpverlenerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ContactpersoonArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TExtraProductHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusToelichtingArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectSoortArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpdrachtgeverKlantArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TrajectArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRVormArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusNotitieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BijlageArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RelatieProductArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\LijstOpdrachtgeverArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\LijstKredietsoortArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\AllegroDocumentArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PLAanvraagArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCJaarrenteArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RCHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlageArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerdeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxTekstArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Int64Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\BBRBegunstigdeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoortenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RekeningnummerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\RelatiecodeBedrijfcodeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\OpenVraagArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\GeslotenVraagArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TableRequestInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\DataParameterArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataParameterArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDataResultArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleFieldInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\StringArrayArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleDeltaChangeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\VariantArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBOverzichtResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSB;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSBEisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzicht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVOverzichtResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVAanvraagResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetSRVEisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceGetLijstSchuldeisersResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraagSRResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SR;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SchuldHulpServiceAanvraag2SRResponse;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ROClientIDHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class AllegroSchuldHulpClassmap
{

    public static function getCollection() : ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('TTest', TTest::class),
            new ClassMap('AWUserInfo', AWUserInfo::class),
            new ClassMap('TAdres', TAdres::class),
            new ClassMap('TRelatie', TRelatie::class),
            new ClassMap('TCasusHeader', TCasusHeader::class),
            new ClassMap('TCasusInfo', TCasusInfo::class),
            new ClassMap('TCasusPVA', TCasusPVA::class),
            new ClassMap('TCasusPVAProduct', TCasusPVAProduct::class),
            new ClassMap('TSRVAanvraag', TSRVAanvraag::class),
            new ClassMap('TSRVEiser', TSRVEiser::class),
            new ClassMap('TMedewerker', TMedewerker::class),
            new ClassMap('TSB', TSB::class),
            new ClassMap('TSBEiser', TSBEiser::class),
            new ClassMap('TSRVAanvraagHeader', TSRVAanvraagHeader::class),
            new ClassMap('TSBHeader', TSBHeader::class),
            new ClassMap('TSRVEisers', TSRVEisers::class),
            new ClassMap('TSBEisers', TSBEisers::class),
            new ClassMap('TPLHeader', TPLHeader::class),
            new ClassMap('TPL', TPL::class),
            new ClassMap('TPRSMutatie', TPRSMutatie::class),
            new ClassMap('TPRSMutaties', TPRSMutaties::class),
            new ClassMap('TDKHeader', TDKHeader::class),
            new ClassMap('TDK', TDK::class),
            new ClassMap('TBBRHeader', TBBRHeader::class),
            new ClassMap('TBBROpdracht', TBBROpdracht::class),
            new ClassMap('TBBROpdrachten', TBBROpdrachten::class),
            new ClassMap('TSaldoReservering', TSaldoReservering::class),
            new ClassMap('TPRSMutatiesPeriode', TPRSMutatiesPeriode::class),
            new ClassMap('TSaldoReserveringen', TSaldoReserveringen::class),
            new ClassMap('TPersoon', TPersoon::class),
            new ClassMap('TAanmelding', TAanmelding::class),
            new ClassMap('TContact', TContact::class),
            new ClassMap('TGezinsSituatie', TGezinsSituatie::class),
            new ClassMap('TJaNeeVraag', TJaNeeVraag::class),
            new ClassMap('TOpenVraag', TOpenVraag::class),
            new ClassMap('TAfspraak', TAfspraak::class),
            new ClassMap('TTeam', TTeam::class),
            new ClassMap('TKind', TKind::class),
            new ClassMap('TProductExtra', TProductExtra::class),
            new ClassMap('TOrganisatie', TOrganisatie::class),
            new ClassMap('TTrajectTaak', TTrajectTaak::class),
            new ClassMap('TContract', TContract::class),
            new ClassMap('TContractenLijst', TContractenLijst::class),
            new ClassMap('TPRSAfschrift', TPRSAfschrift::class),
            new ClassMap('TPRSAfschriftMutatie', TPRSAfschriftMutatie::class),
            new ClassMap('TPRSAfschriftReservering', TPRSAfschriftReservering::class),
            new ClassMap('TPRSAfschriften', TPRSAfschriften::class),
            new ClassMap('TPRSAfschriftMutaties', TPRSAfschriftMutaties::class),
            new ClassMap('TPRSAfschriftReserveringen', TPRSAfschriftReserveringen::class),
            new ClassMap('TCasusDeelopdracht', TCasusDeelopdracht::class),
            new ClassMap('THulpverlener', THulpverlener::class),
            new ClassMap('TContactpersoon', TContactpersoon::class),
            new ClassMap('TExtraProductHeader', TExtraProductHeader::class),
            new ClassMap('TExtraProduct', TExtraProduct::class),
            new ClassMap('TCasusToelichting', TCasusToelichting::class),
            new ClassMap('TOpdrachtgeverKlant', TOpdrachtgeverKlant::class),
            new ClassMap('TTrajectSoort', TTrajectSoort::class),
            new ClassMap('TTraject', TTraject::class),
            new ClassMap('TBBRVorm', TBBRVorm::class),
            new ClassMap('TCasusNotitie', TCasusNotitie::class),
            new ClassMap('TPersoonAanvraag', TPersoonAanvraag::class),
            new ClassMap('TAanvraag', TAanvraag::class),
            new ClassMap('TInkomen', TInkomen::class),
            new ClassMap('TUitgaven', TUitgaven::class),
            new ClassMap('TDocument', TDocument::class),
            new ClassMap('TBijlage', TBijlage::class),
            new ClassMap('TRelatieProduct', TRelatieProduct::class),
            new ClassMap('TAanvraagLening', TAanvraagLening::class),
            new ClassMap('TAanvraagDK', TAanvraagDK::class),
            new ClassMap('TLijstOpdrachtgever', TLijstOpdrachtgever::class),
            new ClassMap('TLijstKredietsoort', TLijstKredietsoort::class),
            new ClassMap('TSchuld', TSchuld::class),
            new ClassMap('TAllegroDocument', TAllegroDocument::class),
            new ClassMap('TDocumentSleutel', TDocumentSleutel::class),
            new ClassMap('TPLAanvraag', TPLAanvraag::class),
            new ClassMap('TRCHeader', TRCHeader::class),
            new ClassMap('TRC', TRC::class),
            new ClassMap('TRCJaarrente', TRCJaarrente::class),
            new ClassMap('TBBoxHeader', TBBoxHeader::class),
            new ClassMap('TBBoxDetail', TBBoxDetail::class),
            new ClassMap('TBBoxBijlage', TBBoxBijlage::class),
            new ClassMap('TBBoxGeadresseerde', TBBoxGeadresseerde::class),
            new ClassMap('TBBoxTekst', TBBoxTekst::class),
            new ClassMap('TSorteerInfo', TSorteerInfo::class),
            new ClassMap('TBBRBegunstigde', TBBRBegunstigde::class),
            new ClassMap('TAfspraakSoorten', TAfspraakSoorten::class),
            new ClassMap('TContract2', TContract2::class),
            new ClassMap('TRelatiecodeBedrijfcode', TRelatiecodeBedrijfcode::class),
            new ClassMap('TRekeningnummer', TRekeningnummer::class),
            new ClassMap('TAanvraag2Persoon', TAanvraag2Persoon::class),
            new ClassMap('TAanvraag2', TAanvraag2::class),
            new ClassMap('TAanvraag2Lening', TAanvraag2Lening::class),
            new ClassMap('TAanvraag2DK', TAanvraag2DK::class),
            new ClassMap('TAanvraag2SR', TAanvraag2SR::class),
            new ClassMap('TAanvraagSR', TAanvraagSR::class),
            new ClassMap('TGeslotenVraag', TGeslotenVraag::class),
            new ClassMap('TableRequestInfo', TableRequestInfo::class),
            new ClassMap('DataParameter', DataParameter::class),
            new ClassMap('SimpleRequestInfo', SimpleRequestInfo::class),
            new ClassMap('SimpleDataParameter', SimpleDataParameter::class),
            new ClassMap('SimpleDataResult', SimpleDataResult::class),
            new ClassMap('SimpleFieldInfo', SimpleFieldInfo::class),
            new ClassMap('SimpleDelta', SimpleDelta::class),
            new ClassMap('SimpleDeltaChange', SimpleDeltaChange::class),
            new ClassMap('UserInfo', UserInfo::class),
            new ClassMap('TableRequestInfoV5', TableRequestInfoV5::class),
            new ClassMap('ColumnSorting', ColumnSorting::class),
            new ClassMap('TableRequestInfoV6', TableRequestInfoV6::class),
            new ClassMap('SimpleDataResultEx', SimpleDataResultEx::class),
            new ClassMap('TestArray', TestArray::class),
            new ClassMap('IntegerArray', IntegerArray::class),
            new ClassMap('CasusHeaderArray', CasusHeaderArray::class),
            new ClassMap('CasusPVAArray', CasusPVAArray::class),
            new ClassMap('CasusPVAProductArray', CasusPVAProductArray::class),
            new ClassMap('BooleanArray', BooleanArray::class),
            new ClassMap('SRVAanvraagHeaderArray', SRVAanvraagHeaderArray::class),
            new ClassMap('SRVEiserArray', SRVEiserArray::class),
            new ClassMap('SBEiserArray', SBEiserArray::class),
            new ClassMap('SBHeaderArray', SBHeaderArray::class),
            new ClassMap('PLHeaderArray', PLHeaderArray::class),
            new ClassMap('PRSMutatieArray', PRSMutatieArray::class),
            new ClassMap('DKHeaderArray', DKHeaderArray::class),
            new ClassMap('BBRHeaderArray', BBRHeaderArray::class),
            new ClassMap('BBROpdrachtArray', BBROpdrachtArray::class),
            new ClassMap('SaldoReserveringArray', SaldoReserveringArray::class),
            new ClassMap('TeamArray', TeamArray::class),
            new ClassMap('KindArray', KindArray::class),
            new ClassMap('TrajectTaakArray', TrajectTaakArray::class),
            new ClassMap('OrganisatieArray', OrganisatieArray::class),
            new ClassMap('AfspraakArray', AfspraakArray::class),
            new ClassMap('ContractArray', ContractArray::class),
            new ClassMap('PRSAfschriftArray', PRSAfschriftArray::class),
            new ClassMap('PRSAfschriftMutatieArray', PRSAfschriftMutatieArray::class),
            new ClassMap('PRSAfschriftReseveringArray', PRSAfschriftReseveringArray::class),
            new ClassMap('CasusDeelopdrachtArray', CasusDeelopdrachtArray::class),
            new ClassMap('HulpverlenerArray', HulpverlenerArray::class),
            new ClassMap('ContactpersoonArray', ContactpersoonArray::class),
            new ClassMap('TExtraProductHeaderArray', TExtraProductHeaderArray::class),
            new ClassMap('CasusToelichtingArray', CasusToelichtingArray::class),
            new ClassMap('TrajectSoortArray', TrajectSoortArray::class),
            new ClassMap('OpdrachtgeverKlantArray', OpdrachtgeverKlantArray::class),
            new ClassMap('TrajectArray', TrajectArray::class),
            new ClassMap('BBRVormArray', BBRVormArray::class),
            new ClassMap('CasusNotitieArray', CasusNotitieArray::class),
            new ClassMap('BijlageArray', BijlageArray::class),
            new ClassMap('RelatieProductArray', RelatieProductArray::class),
            new ClassMap('LijstOpdrachtgeverArray', LijstOpdrachtgeverArray::class),
            new ClassMap('LijstKredietsoortArray', LijstKredietsoortArray::class),
            new ClassMap('SchuldArray', SchuldArray::class),
            new ClassMap('AllegroDocumentArray', AllegroDocumentArray::class),
            new ClassMap('PLAanvraagArray', PLAanvraagArray::class),
            new ClassMap('RCJaarrenteArray', RCJaarrenteArray::class),
            new ClassMap('RCHeaderArray', RCHeaderArray::class),
            new ClassMap('TBBoxHeaderArray', TBBoxHeaderArray::class),
            new ClassMap('TBBoxBijlageArray', TBBoxBijlageArray::class),
            new ClassMap('TBBoxGeadresseerdeArray', TBBoxGeadresseerdeArray::class),
            new ClassMap('TBBoxTekstArray', TBBoxTekstArray::class),
            new ClassMap('Int64Array', Int64Array::class),
            new ClassMap('TSorteerInfoArray', TSorteerInfoArray::class),
            new ClassMap('BBRBegunstigdeArray', BBRBegunstigdeArray::class),
            new ClassMap('TAfspraakSoortenArray', TAfspraakSoortenArray::class),
            new ClassMap('TContract2Array', TContract2Array::class),
            new ClassMap('RekeningnummerArray', RekeningnummerArray::class),
            new ClassMap('RelatiecodeBedrijfcodeArray', RelatiecodeBedrijfcodeArray::class),
            new ClassMap('Rekeningnummer2Array', Rekeningnummer2Array::class),
            new ClassMap('InkomenArray', InkomenArray::class),
            new ClassMap('UitgavenArray', UitgavenArray::class),
            new ClassMap('OpenVraagArray', OpenVraagArray::class),
            new ClassMap('GeslotenVraagArray', GeslotenVraagArray::class),
            new ClassMap('StringArray', StringArray::class),
            new ClassMap('TableRequestInfoArray', TableRequestInfoArray::class),
            new ClassMap('DataParameterArray', DataParameterArray::class),
            new ClassMap('SimpleRequestInfoArray', SimpleRequestInfoArray::class),
            new ClassMap('SimpleDataParameterArray', SimpleDataParameterArray::class),
            new ClassMap('SimpleDataResultArray', SimpleDataResultArray::class),
            new ClassMap('SimpleFieldInfoArray', SimpleFieldInfoArray::class),
            new ClassMap('StringArrayArray', StringArrayArray::class),
            new ClassMap('SimpleDeltaArray', SimpleDeltaArray::class),
            new ClassMap('SimpleDeltaChangeArray', SimpleDeltaChangeArray::class),
            new ClassMap('VariantArray', VariantArray::class),
            new ClassMap('SchuldHulpService___GetSBOverzicht', SchuldHulpServiceGetSBOverzicht::class),
            new ClassMap('SchuldHulpService___GetSBOverzichtResponse', SchuldHulpServiceGetSBOverzichtResponse::class),
            new ClassMap('SchuldHulpService___GetSB', SchuldHulpServiceGetSB::class),
            new ClassMap('SchuldHulpService___GetSBResponse', SchuldHulpServiceGetSBResponse::class),
            new ClassMap('SchuldHulpService___GetSBEisers', SchuldHulpServiceGetSBEisers::class),
            new ClassMap('SchuldHulpService___GetSBEisersResponse', SchuldHulpServiceGetSBEisersResponse::class),
            new ClassMap('SchuldHulpService___GetSRVOverzicht', SchuldHulpServiceGetSRVOverzicht::class),
            new ClassMap('SchuldHulpService___GetSRVOverzichtResponse', SchuldHulpServiceGetSRVOverzichtResponse::class),
            new ClassMap('SchuldHulpService___GetSRVAanvraag', SchuldHulpServiceGetSRVAanvraag::class),
            new ClassMap('SchuldHulpService___GetSRVAanvraagResponse', SchuldHulpServiceGetSRVAanvraagResponse::class),
            new ClassMap('SchuldHulpService___GetSRVEisers', SchuldHulpServiceGetSRVEisers::class),
            new ClassMap('SchuldHulpService___GetSRVEisersResponse', SchuldHulpServiceGetSRVEisersResponse::class),
            new ClassMap('SchuldHulpService___GetLijstSchuldeisers', SchuldHulpServiceGetLijstSchuldeisers::class),
            new ClassMap('SchuldHulpService___GetLijstSchuldeisersResponse', SchuldHulpServiceGetLijstSchuldeisersResponse::class),
            new ClassMap('SchuldHulpService___AanvraagSR', SchuldHulpServiceAanvraagSR::class),
            new ClassMap('SchuldHulpService___AanvraagSRResponse', SchuldHulpServiceAanvraagSRResponse::class),
            new ClassMap('SchuldHulpService___Aanvraag2SR', SchuldHulpServiceAanvraag2SR::class),
            new ClassMap('SchuldHulpService___Aanvraag2SRResponse', SchuldHulpServiceAanvraag2SRResponse::class),
            new ClassMap('ROClientIDHeader', ROClientIDHeader::class),
        ]);
    }


}

