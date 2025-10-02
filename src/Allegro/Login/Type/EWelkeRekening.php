<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EWelkeRekening: string {
    case wrRelatie = 'wrRelatie';
    case wrPartner = 'wrPartner';
    case wrAnders = 'wrAnders';
}
