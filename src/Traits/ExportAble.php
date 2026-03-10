<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Traits;

use Doctrine\ORM\PersistentCollection;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\ActionEvent;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

/**
 * Trait ExportAble
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Traits
 */
trait ExportAble
{
    /**
     * @return Spreadsheet
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function toSpreadsheetCsv(): Spreadsheet
    {
        list($csvHeader, $csvValues) = $this->getClassAttributesAndValues();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $columnIndex = 1;
        foreach ($csvHeader as $headerItem) {
            $sheet->setCellValueByColumnAndRow($columnIndex++, 1, $headerItem);
        }
        $maxColumnIndex = $columnIndex;
        foreach ($csvValues as $csvValue) {
            if ($columnIndex === $maxColumnIndex) {
                $columnIndex = 1;
            }
            $sheet->setCellValueByColumnAndRow($columnIndex++, 2, $csvValue);
        }

        return $spreadsheet;
    }

    /**
     * @param array $header
     * @param array $rows
     *
     * @return Spreadsheet
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    public function batchToSpreadsheetCsv(array $header, array $rows): Spreadsheet
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $columnIndex = 1;
        foreach ($header as $headerItem) {
            $sheet->setCellValueByColumnAndRow($columnIndex++, 1, $headerItem);
        }
        $maxColumnIndex = $columnIndex;
        $rowIndex = 1;
        foreach ($rows as $csvValue) {
            if ($columnIndex === $maxColumnIndex) {
                $columnIndex = 1;
                $rowIndex++;
            }
            $sheet->setCellValueByColumnAndRow($columnIndex++, $rowIndex, $csvValue);
        }

        return $spreadsheet;
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

        if (in_array(get_class($this), [Aantekening::class, ActionEvent::class], true)) {
            $remove = ['dossier'];
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

            if ($attributeValue instanceof SchuldItem) {
                $attributeValue = '';
            }

            if ($attributeValue instanceof \DateTime) {
                $attributeValue = $attributeValue->format('d-m-Y h:i:s');
            }

            if (is_bool($attributeValue)) {
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
        return [$csvHeader, $csvValues];
    }
}
