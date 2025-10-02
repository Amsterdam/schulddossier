<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum SimpleDataType: string {
    case String = 'String';
    case Integer = 'Integer';
    case Double = 'Double';
    case DateTime = 'DateTime';
    case Int64 = 'Int64';
    case Currency = 'Currency';
    case Guid = 'Guid';
    case Binary = 'Binary';
    case Boolean = 'Boolean';
}
