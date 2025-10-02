<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum EPeriode: string {
    case Leeg = 'Leeg';
    case Maand = 'Maand';
    case Vier_weken = 'Vier_weken';
    case Week = 'Week';
}
