<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class AllegroTypeExtension
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class StrPadExtension extends AbstractExtension
{

    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'str_pad',
                [$this, 'strPad']
            )
        ];
    }

    public function strPad($input, $pad_length, $pad_string = " "): string
    {
        return str_pad((string)$input, $pad_length, $pad_string, STR_PAD_LEFT);
    }

}
