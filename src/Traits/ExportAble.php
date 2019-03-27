<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Traits;

use Doctrine\ORM\PersistentCollection;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

/**
 * Trait ExportAble
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Traits
 */
trait ExportAble
{
    /**
     * @return string
     */
    public function toCsv(): string
    {
        list($csvHeader, $csvValues) = $this->getClassAttributesAndValues();

        $csvHeaderRow = '"' . implode('","', $csvHeader) . '"';
        $csvValuesRow = '"' . implode('","', $csvValues) . '"';

        return $csvHeaderRow . PHP_EOL . $csvValuesRow;
    }

    /**
     * @return array
     */
    public function getClassAttributes(): array
    {
        $classAttributes = get_object_vars($this);
        if (get_class($this) === Dossier::class) {
            $remove = ['documenten', 'schuldItems', 'aantekeningen', 'timeline'];
            $classAttributes = array_diff_key($classAttributes, array_flip($remove));
        }

        return $classAttributes;
    }

    /**
     * @return array
     */
    public function getClassAttributesAndValues(): array
    {
        $classAttributes = $this->getClassAttributes();
        $csvHeader = [];
        $csvValues = [];
        foreach ($classAttributes as $attributeKey => $attributeValue) {
            if ($attributeValue instanceof Voorlegger) {
                continue;
            }
            if ($attributeValue instanceof Dossier) {
                continue;
            }

            if ($attributeValue instanceof \DateTime) {
                $attributeValue = $attributeValue->format('d-m-Y h:i:s');
            }
            if(is_bool($attributeValue)){
                $attributeValue = $attributeValue ? 'ja' : 'nee';
            }

            if (is_array($attributeValue)) {
                $attributeValue = \json_encode($attributeValue);
            }
            if ($attributeValue instanceof PersistentCollection) {
                $attributeValue = \json_encode($attributeValue->toArray());
            }
            $csvHeader[] = $attributeKey;
            $csvValues[] = $attributeValue;
        }
        return array($csvHeader, $csvValues);
    }
}
