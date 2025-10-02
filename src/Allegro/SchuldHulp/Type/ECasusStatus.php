<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum ECasusStatus: string {
    case csAanmelding = 'csAanmelding';
    case csAanmeldingVoltooid = 'csAanmeldingVoltooid';
    case csSlapend = 'csSlapend';
    case csCrisis = 'csCrisis';
    case csInventarisatie = 'csInventarisatie';
    case csAnalyse = 'csAnalyse';
    case csPvA = 'csPvA';
    case csFiattering = 'csFiattering';
    case csAfwijzing = 'csAfwijzing';
    case csInactief = 'csInactief';
    case csStop = 'csStop';
    case csNone = 'csNone';
}
