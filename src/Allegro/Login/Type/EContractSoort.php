<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EContractSoort: string {
    case scBBR = 'scBBR';
    case scSR = 'scSR';
    case scLening = 'scLening';
    case scDK = 'scDK';
    case scAlles = 'scAlles';
    case scCasus = 'scCasus';
    case scAllesPlus = 'scAllesPlus';
}
