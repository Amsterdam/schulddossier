<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EOntvangenVerzonden: string {
    case ovOntvangen = 'ovOntvangen';
    case ovVerzonden = 'ovVerzonden';
    case ovBeide = 'ovBeide';
}
