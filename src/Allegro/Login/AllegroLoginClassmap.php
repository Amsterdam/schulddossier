<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTest;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AWUserInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVA;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusPVAProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSB;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVAanvraagHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSRVEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBEisers;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPL;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutaties;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDKHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDK;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBROpdracht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBROpdrachten;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSaldoReservering;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSMutatiesPeriode;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSaldoReserveringen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanmelding;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraak;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTeam;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TKind;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TProductExtra;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOrganisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectTaak;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContractenLijst;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschrift;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReservering;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriften;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftMutaties;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPRSAfschriftReserveringen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusDeelopdracht;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusToelichting;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpdrachtgeverKlant;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTraject;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusNotitie;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoonAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TInkomen;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBijlage;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatieProduct;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagLening;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraagDK;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstOpdrachtgever;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSchuld;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAllegroDocument;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TDocumentSleutel;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPLAanvraag;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRC;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRCJaarrente;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxDetail;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlage;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxGeadresseerde;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekst;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSorteerInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRBegunstigde;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraakSoorten;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract2;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameter;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameter;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResult;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDelta;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChange;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\UserInfo;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfoV5;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ColumnSorting;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfoV6;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResultEx;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TestArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\IntegerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusPVAProductArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BooleanArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVAanvraagHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SRVEiserArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBEiserArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SBHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PLHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSMutatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DKHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBROpdrachtArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SaldoReserveringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TeamArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectTaakArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OrganisatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AfspraakArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContractArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusDeelopdrachtArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\HulpverlenerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ContactpersoonArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TExtraProductHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusToelichtingArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectSoortArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\OpdrachtgeverKlantArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TrajectArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRVormArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\CasusNotitieArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BijlageArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RelatieProductArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LijstOpdrachtgeverArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\LijstKredietsoortArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SchuldArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\AllegroDocumentArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PLAanvraagArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCJaarrenteArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RCHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxHeaderArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxGeadresseerdeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxTekstArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\Int64Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSorteerInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\BBRBegunstigdeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAfspraakSoortenArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContract2Array;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RekeningnummerArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\RelatiecodeBedrijfcodeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TableRequestInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\DataParameterArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataParameterArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDataResultArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfoArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\StringArrayArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleDeltaChangeArray;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\VariantArray;
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
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\ROClientIDHeader;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class AllegroLoginClassmap
{

    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
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
            new ClassMap('LoginService___AllegroWebLogin', LoginServiceAllegroWebLogin::class),
            new ClassMap('LoginService___AllegroWebLoginResponse', LoginServiceAllegroWebLoginResponse::class),
            new ClassMap('LoginService___AllegroWebMagAanmelden', LoginServiceAllegroWebMagAanmelden::class),
            new ClassMap(
                'LoginService___AllegroWebMagAanmeldenResponse',
                LoginServiceAllegroWebMagAanmeldenResponse::class
            ),
            new ClassMap('LoginService___AllegroWebLoginTijdelijk', LoginServiceAllegroWebLoginTijdelijk::class),
            new ClassMap(
                'LoginService___AllegroWebLoginTijdelijkResponse',
                LoginServiceAllegroWebLoginTijdelijkResponse::class
            ),
            new ClassMap('LoginService___BSNNaarRelatie', LoginServiceBSNNaarRelatie::class),
            new ClassMap('LoginService___BSNNaarRelatieResponse', LoginServiceBSNNaarRelatieResponse::class),
            new ClassMap('LoginService___GenereerWachtwoord', LoginServiceGenereerWachtwoord::class),
            new ClassMap('LoginService___GenereerWachtwoordResponse', LoginServiceGenereerWachtwoordResponse::class),
            new ClassMap('LoginService___NieuweRegistratie', LoginServiceNieuweRegistratie::class),
            new ClassMap('LoginService___NieuweRegistratieResponse', LoginServiceNieuweRegistratieResponse::class),
            new ClassMap('LoginService___ActiveerRegistratie', LoginServiceActiveerRegistratie::class),
            new ClassMap('LoginService___ActiveerRegistratieResponse', LoginServiceActiveerRegistratieResponse::class),
            new ClassMap('LoginService___NieuwContact', LoginServiceNieuwContact::class),
            new ClassMap('LoginService___NieuwContactResponse', LoginServiceNieuwContactResponse::class),
            new ClassMap('LoginService___CheckWachtwoord', LoginServiceCheckWachtwoord::class),
            new ClassMap('LoginService___CheckWachtwoordResponse', LoginServiceCheckWachtwoordResponse::class),
            new ClassMap('LoginService___NieuweRegistratieBSN', LoginServiceNieuweRegistratieBSN::class),
            new ClassMap(
                'LoginService___NieuweRegistratieBSNResponse',
                LoginServiceNieuweRegistratieBSNResponse::class
            ),
            new ClassMap('LoginService___Logout', LoginServiceLogout::class),
            new ClassMap('LoginService___LogoutResponse', LoginServiceLogoutResponse::class),
            new ClassMap('LoginService___BSNNaarRelatieMetBedrijf', LoginServiceBSNNaarRelatieMetBedrijf::class),
            new ClassMap(
                'LoginService___BSNNaarRelatieMetBedrijfResponse',
                LoginServiceBSNNaarRelatieMetBedrijfResponse::class
            ),
            new ClassMap('ROClientIDHeader', ROClientIDHeader::class),
        );
    }
}
