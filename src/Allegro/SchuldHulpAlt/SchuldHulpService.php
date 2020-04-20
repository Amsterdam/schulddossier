<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldHulpService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'TTest' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TTest',
      'AWUserInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\AWUserInfo',
      'TAdres' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAdres',
      'TRelatie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRelatie',
      'TCasusHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusHeader',
      'TCasusInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusInfo',
      'TCasusPVA' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusPVA',
      'TCasusPVAProduct' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusPVAProduct',
      'TSRVAanvraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSRVAanvraag',
      'TSRVEiser' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSRVEiser',
      'TMedewerker' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TMedewerker',
      'TSB' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSB',
      'TSBEiser' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSBEiser',
      'TSRVAanvraagHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSRVAanvraagHeader',
      'TSBHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSBHeader',
      'TSRVEisers' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSRVEisers',
      'TSBEisers' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSBEisers',
      'TPLHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPLHeader',
      'TPL' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPL',
      'TPRSMutatie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSMutatie',
      'TPRSMutaties' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSMutaties',
      'TDKHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TDKHeader',
      'TDK' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TDK',
      'TBBRHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBRHeader',
      'TBBROpdracht' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBROpdracht',
      'TBBROpdrachten' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBROpdrachten',
      'TSaldoReservering' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSaldoReservering',
      'TPRSMutatiesPeriode' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSMutatiesPeriode',
      'TSaldoReserveringen' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSaldoReserveringen',
      'TPersoon' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPersoon',
      'TAanmelding' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanmelding',
      'TContact' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContact',
      'TGezinsSituatie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TGezinsSituatie',
      'TJaNeeVraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TJaNeeVraag',
      'TOpenVraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TOpenVraag',
      'TAfspraak' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAfspraak',
      'TTeam' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TTeam',
      'TKind' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TKind',
      'TProductExtra' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TProductExtra',
      'TOrganisatie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TOrganisatie',
      'TTrajectTaak' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TTrajectTaak',
      'TContract' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContract',
      'TContractenLijst' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContractenLijst',
      'TPRSAfschrift' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschrift',
      'TPRSAfschriftMutatie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschriftMutatie',
      'TPRSAfschriftReservering' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschriftReservering',
      'TPRSAfschriften' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschriften',
      'TPRSAfschriftMutaties' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschriftMutaties',
      'TPRSAfschriftReserveringen' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPRSAfschriftReserveringen',
      'TCasusDeelopdracht' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusDeelopdracht',
      'THulpverlener' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\THulpverlener',
      'TContactpersoon' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContactpersoon',
      'TExtraProductHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TExtraProductHeader',
      'TExtraProduct' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TExtraProduct',
      'TCasusToelichting' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusToelichting',
      'TOpdrachtgeverKlant' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TOpdrachtgeverKlant',
      'TTrajectSoort' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TTrajectSoort',
      'TTraject' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TTraject',
      'TBBRVorm' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBRVorm',
      'TCasusNotitie' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TCasusNotitie',
      'TPersoonAanvraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPersoonAanvraag',
      'TAanvraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag',
      'TInkomen' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TInkomen',
      'TUitgaven' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TUitgaven',
      'TDocument' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TDocument',
      'TBijlage' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBijlage',
      'TRelatieProduct' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRelatieProduct',
      'TAanvraagLening' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraagLening',
      'TAanvraagDK' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraagDK',
      'TLijstOpdrachtgever' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TLijstOpdrachtgever',
      'TLijstKredietsoort' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TLijstKredietsoort',
      'TSchuld' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSchuld',
      'TAllegroDocument' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAllegroDocument',
      'TDocumentSleutel' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TDocumentSleutel',
      'TPLAanvraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TPLAanvraag',
      'TRCHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRCHeader',
      'TRC' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRC',
      'TRCJaarrente' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRCJaarrente',
      'TBBoxHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxHeader',
      'TBBoxDetail' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxDetail',
      'TBBoxBijlage' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxBijlage',
      'TBBoxGeadresseerde' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxGeadresseerde',
      'TBBoxTekst' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxTekst',
      'TSorteerInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSorteerInfo',
      'TBBRBegunstigde' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBRBegunstigde',
      'TAfspraakSoorten' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAfspraakSoorten',
      'TContract2' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContract2',
      'TRelatiecodeBedrijfcode' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRelatiecodeBedrijfcode',
      'TRekeningnummer' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TRekeningnummer',
      'TAanvraag2Persoon' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag2Persoon',
      'TAanvraag2' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag2',
      'TAanvraag2Lening' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag2Lening',
      'TAanvraag2DK' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag2DK',
      'TAanvraag2SR' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraag2SR',
      'TAanvraagSR' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAanvraagSR',
      'TGeslotenVraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TGeslotenVraag',
      'TableRequestInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TableRequestInfo',
      'DataParameter' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\DataParameter',
      'SimpleRequestInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleRequestInfo',
      'SimpleDataParameter' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDataParameter',
      'SimpleDataResult' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDataResult',
      'SimpleFieldInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleFieldInfo',
      'SimpleDelta' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDelta',
      'SimpleDeltaChange' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDeltaChange',
      'UserInfo' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\UserInfo',
      'TableRequestInfoV5' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TableRequestInfoV5',
      'ColumnSorting' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\ColumnSorting',
      'TableRequestInfoV6' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TableRequestInfoV6',
      'SimpleDataResultEx' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDataResultEx',
      'TestArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TestArray',
      'IntegerArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\IntegerArray',
      'CasusHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusHeaderArray',
      'CasusPVAArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusPVAArray',
      'CasusPVAProductArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusPVAProductArray',
      'BooleanArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BooleanArray',
      'SRVAanvraagHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SRVAanvraagHeaderArray',
      'SRVEiserArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SRVEiserArray',
      'SBEiserArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SBEiserArray',
      'SBHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SBHeaderArray',
      'PLHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PLHeaderArray',
      'PRSMutatieArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PRSMutatieArray',
      'DKHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\DKHeaderArray',
      'BBRHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BBRHeaderArray',
      'BBROpdrachtArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BBROpdrachtArray',
      'SaldoReserveringArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SaldoReserveringArray',
      'TeamArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TeamArray',
      'KindArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\KindArray',
      'TrajectTaakArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TrajectTaakArray',
      'OrganisatieArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\OrganisatieArray',
      'AfspraakArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\AfspraakArray',
      'ContractArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\ContractArray',
      'PRSAfschriftArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PRSAfschriftArray',
      'PRSAfschriftMutatieArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PRSAfschriftMutatieArray',
      'PRSAfschriftReseveringArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PRSAfschriftReseveringArray',
      'CasusDeelopdrachtArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusDeelopdrachtArray',
      'HulpverlenerArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\HulpverlenerArray',
      'ContactpersoonArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\ContactpersoonArray',
      'TExtraProductHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TExtraProductHeaderArray',
      'CasusToelichtingArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusToelichtingArray',
      'TrajectSoortArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TrajectSoortArray',
      'OpdrachtgeverKlantArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\OpdrachtgeverKlantArray',
      'TrajectArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TrajectArray',
      'BBRVormArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BBRVormArray',
      'CasusNotitieArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\CasusNotitieArray',
      'BijlageArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BijlageArray',
      'RelatieProductArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\RelatieProductArray',
      'LijstOpdrachtgeverArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\LijstOpdrachtgeverArray',
      'LijstKredietsoortArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\LijstKredietsoortArray',
      'SchuldArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldArray',
      'AllegroDocumentArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\AllegroDocumentArray',
      'PLAanvraagArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\PLAanvraagArray',
      'RCJaarrenteArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\RCJaarrenteArray',
      'RCHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\RCHeaderArray',
      'TBBoxHeaderArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxHeaderArray',
      'TBBoxBijlageArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxBijlageArray',
      'TBBoxGeadresseerdeArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxGeadresseerdeArray',
      'TBBoxTekstArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TBBoxTekstArray',
      'Int64Array' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\Int64Array',
      'TSorteerInfoArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TSorteerInfoArray',
      'BBRBegunstigdeArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\BBRBegunstigdeArray',
      'TAfspraakSoortenArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TAfspraakSoortenArray',
      'TContract2Array' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TContract2Array',
      'RekeningnummerArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\RekeningnummerArray',
      'RelatiecodeBedrijfcodeArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\RelatiecodeBedrijfcodeArray',
      'Rekeningnummer2Array' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\Rekeningnummer2Array',
      'InkomenArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\InkomenArray',
      'UitgavenArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\UitgavenArray',
      'OpenVraagArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\OpenVraagArray',
      'GeslotenVraagArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\GeslotenVraagArray',
      'StringArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\StringArray',
      'TableRequestInfoArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\TableRequestInfoArray',
      'DataParameterArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\DataParameterArray',
      'SimpleRequestInfoArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleRequestInfoArray',
      'SimpleDataParameterArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDataParameterArray',
      'SimpleDataResultArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDataResultArray',
      'SimpleFieldInfoArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleFieldInfoArray',
      'StringArrayArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\StringArrayArray',
      'SimpleDeltaArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDeltaArray',
      'SimpleDeltaChangeArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SimpleDeltaChangeArray',
      'VariantArray' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\VariantArray',
      'SchuldHulpService___GetSBOverzicht' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSBOverzicht',
      'SchuldHulpService___GetSBOverzichtResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSBOverzichtResponse',
      'SchuldHulpService___GetSB' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSB',
      'SchuldHulpService___GetSBResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSBResponse',
      'SchuldHulpService___GetSBEisers' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSBEisers',
      'SchuldHulpService___GetSBEisersResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSBEisersResponse',
      'SchuldHulpService___GetSRVOverzicht' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVOverzicht',
      'SchuldHulpService___GetSRVOverzichtResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVOverzichtResponse',
      'SchuldHulpService___GetSRVAanvraag' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVAanvraag',
      'SchuldHulpService___GetSRVAanvraagResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVAanvraagResponse',
      'SchuldHulpService___GetSRVEisers' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVEisers',
      'SchuldHulpService___GetSRVEisersResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetSRVEisersResponse',
      'SchuldHulpService___GetLijstSchuldeisers' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetLijstSchuldeisers',
      'SchuldHulpService___GetLijstSchuldeisersResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___GetLijstSchuldeisersResponse',
      'SchuldHulpService___AanvraagSR' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___AanvraagSR',
      'SchuldHulpService___AanvraagSRResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___AanvraagSRResponse',
      'SchuldHulpService___Aanvraag2SR' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___Aanvraag2SR',
      'SchuldHulpService___Aanvraag2SRResponse' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\SchuldHulpService___Aanvraag2SRResponse',
      'ROClientIDHeader' => 'GemeenteAmsterdam\\FixxxSchuldhulp\\Allegro\\SchuldHulpAlt\\ROClientIDHeader',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = '../doc/modified_schuldhulpservice.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SchuldHulpService___GetSBOverzicht $parameters
     * @return SchuldHulpService___GetSBOverzichtResponse
     */
    public function GetSBOverzicht(SchuldHulpService___GetSBOverzicht $parameters)
    {
      return $this->__soapCall('GetSBOverzicht', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetSB $parameters
     * @return SchuldHulpService___GetSBResponse
     */
    public function GetSB(SchuldHulpService___GetSB $parameters)
    {
      return $this->__soapCall('GetSB', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetSBEisers $parameters
     * @return SchuldHulpService___GetSBEisersResponse
     */
    public function GetSBEisers(SchuldHulpService___GetSBEisers $parameters)
    {
      return $this->__soapCall('GetSBEisers', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetSRVOverzicht $parameters
     * @return SchuldHulpService___GetSRVOverzichtResponse
     */
    public function GetSRVOverzicht(SchuldHulpService___GetSRVOverzicht $parameters)
    {
      return $this->__soapCall('GetSRVOverzicht', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetSRVAanvraag $parameters
     * @return SchuldHulpService___GetSRVAanvraagResponse
     */
    public function GetSRVAanvraag(SchuldHulpService___GetSRVAanvraag $parameters)
    {
      return $this->__soapCall('GetSRVAanvraag', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetSRVEisers $parameters
     * @return SchuldHulpService___GetSRVEisersResponse
     */
    public function GetSRVEisers(SchuldHulpService___GetSRVEisers $parameters)
    {
      return $this->__soapCall('GetSRVEisers', array($parameters));
    }

    /**
     * @param SchuldHulpService___GetLijstSchuldeisers $parameters
     * @return SchuldHulpService___GetLijstSchuldeisersResponse
     */
    public function GetLijstSchuldeisers(SchuldHulpService___GetLijstSchuldeisers $parameters)
    {
      return $this->__soapCall('GetLijstSchuldeisers', array($parameters));
    }

    /**
     * deprecated Allegro 3.26.1
     *
     * @param SchuldHulpService___AanvraagSR $parameters
     * @return SchuldHulpService___AanvraagSRResponse
     */
    public function AanvraagSR(SchuldHulpService___AanvraagSR $parameters)
    {
      return $this->__soapCall('AanvraagSR', array($parameters));
    }

    /**
     * @param SchuldHulpService___Aanvraag2SR $parameters
     * @return SchuldHulpService___Aanvraag2SRResponse
     */
    public function Aanvraag2SR(SchuldHulpService___Aanvraag2SR $parameters)
    {
      return $this->__soapCall('Aanvraag2SR', array($parameters));
    }

}
