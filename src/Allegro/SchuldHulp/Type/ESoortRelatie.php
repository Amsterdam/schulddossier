<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

/**
 * 1e positie: Klant
 *  2e positie: Opdrachtgever
 *  3e positie: Hulpverlener
 *  4e positie: Schuldeiser
 *  5e positie: Eigen organisatie
 *  6e positie: Andere instantie.
 */
enum ESoortRelatie: string {
    case srKlant = 'srKlant';
    case srOpdrachtgever = 'srOpdrachtgever';
    case srHulpverlener = 'srHulpverlener';
    case srSchuldeiser = 'srSchuldeiser';
    case srEigenOrganisatie = 'srEigenOrganisatie';
    case srAndereInstantie = 'srAndereInstantie';
}
