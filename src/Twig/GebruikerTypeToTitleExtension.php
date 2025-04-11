<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class GebruikerTypeToTitleExtension
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class GebruikerTypeToTitleExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'transform_type_in_title',
                [$this, 'transformTypeInTitle']
            )
        ];
    }

    public function transformTypeInTitle(string $type): string
    {
        return Gebruiker::getTitleFromType($type);
    }
}
