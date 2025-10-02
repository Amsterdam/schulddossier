<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

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
