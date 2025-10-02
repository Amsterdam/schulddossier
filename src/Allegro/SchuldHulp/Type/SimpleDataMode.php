<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum SimpleDataMode: string {
    case Insert = 'Insert';
    case Delete = 'Delete';
    case Update = 'Update';
}
