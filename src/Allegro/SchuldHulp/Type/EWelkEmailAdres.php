<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

enum EWelkEmailAdres: string {
    case weaWebGegevens = 'weaWebGegevens';
    case weaCorrespondentie = 'weaCorrespondentie';
    case weaBeide = 'weaBeide';
}
