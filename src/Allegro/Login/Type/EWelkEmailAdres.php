<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

enum EWelkEmailAdres: string {
    case weaWebGegevens = 'weaWebGegevens';
    case weaCorrespondentie = 'weaCorrespondentie';
    case weaBeide = 'weaBeide';
}
