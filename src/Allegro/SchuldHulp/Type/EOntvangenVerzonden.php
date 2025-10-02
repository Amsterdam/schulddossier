<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum EOntvangenVerzonden: string {
    case ovOntvangen = 'ovOntvangen';
    case ovVerzonden = 'ovVerzonden';
    case ovBeide = 'ovBeide';
}
