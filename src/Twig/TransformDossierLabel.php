<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Constants\DossierLabel;

/**
 * Class GebruikerTypeToTitleExtension
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class TransformDossierLabel extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]s
     */
 
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('transform_dossier_label', function (string $key) {
             
                return  DossierLabel::getLabelOrHumanize($key);
            })
        ];
    }
}

  

