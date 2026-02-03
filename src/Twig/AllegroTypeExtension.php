<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;

/**
 * Class AllegroTypeExtension
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class AllegroTypeExtension extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]s
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('allegro_status', function (string $status) {
                return Dossier::twigAllegroStatus($status);
            })
        ];
    }
}
