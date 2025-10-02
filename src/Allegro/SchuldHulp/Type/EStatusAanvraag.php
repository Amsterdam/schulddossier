<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum EStatusAanvraag: string {
    case A = 'A';
    case B = 'B';
    case C = 'C';
    case D = 'D';
    case E = 'E';
    case Gefiatteerd = 'Gefiatteerd';
    case Afgewezen = 'Afgewezen';
    case Ingetrokken = 'Ingetrokken';
}
