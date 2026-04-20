<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use HTMLPurifier;
use HTMLPurifier_Config;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;

/**
 * Class SanitizeHtml
 *
 * This class extends Twig's functionality by adding a custom filter to sanitize HTML input.
 * It uses the HTMLPurifier library to allow only specific HTML tags (e.g., <strong>).
 */
class SanitizeHtml extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('sanitize', function ($input) {
                $config = HTMLPurifier_Config::createDefault();
                $config->set('HTML.Allowed', 'strong, br');
                $purifier = new HTMLPurifier($config);
                $purifiedInput =  $purifier->purify($input);

                return $purifiedInput;
            })
        ];
    }
}
