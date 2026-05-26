<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

enum EOntvangenVerzonden: string
{
    case ovOntvangen = 'ovOntvangen';
    case ovVerzonden = 'ovVerzonden';
    case ovBeide = 'ovBeide';
}
