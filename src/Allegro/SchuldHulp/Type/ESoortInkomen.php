<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum ESoortInkomen: string {
    case Werk = 'Werk';
    case Uitkering = 'Uitkering';
    case Combinatie_werk_en_uitkering = 'Combinatie_werk_en_uitkering';
    case Studiefinanciering = 'Studiefinanciering';
    case Pensioen = 'Pensioen';
    case Combinatie_pensioen_en_uitkering = 'Combinatie_pensioen_en_uitkering';
    case Combinatie_werk_en_pensioen = 'Combinatie_werk_en_pensioen';
    case Combinatie_werk_en_uitkering_en_pensioen = 'Combinatie_werk_en_uitkering_en_pensioen';
}
