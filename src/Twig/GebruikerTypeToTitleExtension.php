<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;

/**
 * Class GebruikerTypeToTitleExtension
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class GebruikerTypeToTitleExtension extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]s
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('transform_type_in_title', function (string $type) {
                return Gebruiker::getTitleFromType($type);
            })
        ];
    }
}
