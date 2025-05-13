<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Twig;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class GebruikerTypeToTitleExtension
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Twig
 */
class ExportDossierVoorlegger extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter(
                'exportDossierVoorlegger',
                [$this, 'exportDossierVoorlegger']
            )
        ];
    }

    public function exportDossierVoorlegger(Voorlegger $voorlegger): string
    {
        list($csvHeader, $csvValues) = $voorlegger->getClassAttributesAndValues();
        $html = '';
        foreach ($csvHeader as $key => $value) {
            $html .= '<tr><td>' . $value . '</td><td>' . $csvValues[$key] . '</td></tr>';
        }
        return $html;
    }

}
