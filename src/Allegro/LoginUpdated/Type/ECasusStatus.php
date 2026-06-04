<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

enum ECasusStatus: string
{
    case csAanmelding = 'csAanmelding';
    case csAanmeldingVoorlopigGeweigerd = 'csAanmeldingVoorlopigGeweigerd';
    case csAanmeldingGeweigerd = 'csAanmeldingGeweigerd';
    case csAanmeldingVoltooid = 'csAanmeldingVoltooid';
    case csCrisis = 'csCrisis';
    case csInventarisatie = 'csInventarisatie';
    case csAnalyse = 'csAnalyse';
    case csPvA = 'csPvA';
    case csFiattering = 'csFiattering';
    case csSlapend = 'csSlapend';
    case csAfwijzing = 'csAfwijzing';
    case csStop = 'csStop';
    case csInactief = 'csInactief';
    case csNone = 'csNone';
}
