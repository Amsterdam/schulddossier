<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum EWoningSoort: string {
    case Leeg = 'Leeg';
    case Huur = 'Huur';
    case Koop = 'Koop';
    case Inwonend = 'Inwonend';
}
