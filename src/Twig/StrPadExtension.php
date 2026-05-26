<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use Twig\TwigFilter;
use Twig\Extension\AbstractExtension;

/**
 * Class AllegroTypeExtension
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class StrPadExtension extends AbstractExtension
{
    /**
     * @return array|TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('str_pad', function ($input, $pad_length, $pad_string = " ") {
                    return str_pad((string)$input, $pad_length, $pad_string, STR_PAD_LEFT);
            })
        ];
    }
}
