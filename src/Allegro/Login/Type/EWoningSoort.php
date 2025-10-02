<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EWoningSoort: string {
    case Leeg = 'Leeg';
    case Huur = 'Huur';
    case Koop = 'Koop';
    case Inwonend = 'Inwonend';
}
