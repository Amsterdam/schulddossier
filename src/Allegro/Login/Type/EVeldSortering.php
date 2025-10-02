<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EVeldSortering: string {
    case vsCode = 'vsCode';
    case vsAfzenderOntvanger = 'vsAfzenderOntvanger';
    case vsOnderwerp = 'vsOnderwerp';
    case vsTijdstip = 'vsTijdstip';
    case vsOntvangen = 'vsOntvangen';
    case vsGelezen = 'vsGelezen';
    case vsGearchiveerd = 'vsGearchiveerd';
    case vsBijlagen = 'vsBijlagen';
}
