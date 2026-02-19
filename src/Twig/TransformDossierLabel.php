<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Constants\DossierFormLabel;

/**
 * Class TransformDossierLabel
 *
 * A Twig extension that provides custom filters for transforming dossier labels.
 * This extension is used to make keys more human-readable by applying a transformation
 * using the DossierFormLabel::getFormLabelOrHumanize() method
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class TransformDossierLabel extends \Twig_Extension
{
    /**
     * The filter 'transform_dossier_label' transforms a key into a readable label
     * using the method DossierFormLabel::getFormLabelOrHumanize().
     *
     * @return \Twig_Filter[] An array of Twig filters.
     */

    public function getFilters(): array
    {
        return [
            new \Twig_Filter('transform_dossier_label', function (string $key) {

                return  DossierFormLabel::getFormLabelOrHumanize($key);
            })
        ];
    }
}
