<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Constants\DossierFormLabel;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class TransformDossierLabel
 *
 * A Twig extension that provides custom filters for transforming dossier labels.
 * This extension is used to make keys more human-readable by applying a transformation
 * using the DossierFormLabel::getFormLabelOrHumanize() method
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class TransformDossierLabel extends AbstractExtension
{
    /**
     * The filter 'transform_dossier_label' transforms a key into a readable label
     * using the method DossierFormLabel::getFormLabelOrHumanize().
     *
     * @return TwigFilter[] An array of Twig filters.
     */

    public function getFilters(): array
    {
        return [
            new TwigFilter('transform_dossier_label', function (string $key) {

                return  DossierFormLabel::getFormLabelOrHumanize($key);
            })
        ];
    }
}
