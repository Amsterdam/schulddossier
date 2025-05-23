<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class AllegroTypeExtension
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class AllegroTypeExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'allegroStatus',
                [
                    $this,
                    'allegroStatus'
                ]
            )
        ];
    }

    public function allegroStatus(String $status): string
    {
        return Dossier::twigAllegroStatus($status);
    }
}
