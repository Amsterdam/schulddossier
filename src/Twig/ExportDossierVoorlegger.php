<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

/**
 * Class GebruikerTypeToTitleExtension
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class ExportDossierVoorlegger extends \Twig_Extension
{
    /**
     * @return array|\Twig_Filter[]s
     */
    public function getFilters(): array
    {
        return [
            new \Twig_Filter('exportDossierVoorlegger', function (Voorlegger $voorlegger): string {
                list($csvHeader, $csvValues) = $voorlegger->getClassAttributesAndValues();
                $html = '';
                foreach ($csvHeader as $key => $value) {
                    $html .= '<tr><td>' . $value . '</td><td>' . $csvValues[$key] . '</td></tr>';
                }
                return $html;
            })
        ];
    }

}
