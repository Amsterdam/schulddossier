<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum SimpleDataMode: string {
    case Insert = 'Insert';
    case Delete = 'Delete';
    case Update = 'Update';
}
