<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;

/**
 * Class AllegroTypeExtension
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class StrPadExtension extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('str_pad', function ($input, $pad_length, $pad_string = " ") {
                    return str_pad((string)$input, $pad_length, $pad_string, STR_PAD_LEFT);
            })
        ];
    }
}
