<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Constants;

class DossierLabel
{
   
    public const DOSSIER_LABELS = [
        'arbeidsovereenkomstContract' => 'Soort dienstverband',
        'arbeidsovereenkomstWerkgever' => 'Soort Werkgever',
        'arbeidsovereenkomstEinddatum' => 'Einddatum dienstverband (indien van toepassing)',
        'aangifteBelastingdienst' => 'Aangifte ingediend',
        'beschikkingInkomenUitWerk' => 'Inkomen uit werk',
        'beschikkingUwvZw' => 'UWV ZW',
        'beschikkingUwvWw' => 'UWV WW',
        'beschikkingUwvWia' => 'UWV Wia',
        'beschikkingUwvWajong' => 'UWV Wajong',
        'beschikkingGemeenteAmsterdamWPI' => 'Gemeente Amsterdam (WPI)',
        'beschikkingSVBAOW' => 'SVB (AOW)',
        'beschikkingSVBANW' => 'SVB (ANW)',
        'beschikkingGemeenteAmsterdamIOAW' => 'Gemeente Amsterdam (IOAW)',
        'verloningsDag' => 'Verloningsmoment',

    ];

    /**
     * Retrieves a label for a given key.
     *
     * This method attempts to fetch a label from the `DOSSIER_LABELS` constant using the provided key.
     * If the key does not exist in `DOSSIER_LABELS`, it will return the key itself.
     *
     * @param string $key The key for which the label is to be retrieved.
     * @return string The corresponding label or the key if no label is found.
     */
    public static function getLabel(string $key): string
    {
        return self::DOSSIER_LABELS[$key] ?? $key;
    }

    /**
     * Retrieves a label for a given key or generates a human-readable version of the key.
     *
     * This method attempts to fetch a label from the `DOSSIER_LABELS` constant using the provided key.
     * If the key does not exist in `DOSSIER_LABELS`, it will generate a human-readable label by converting
     * the key from camelCase to a spaced and capitalized format (e.g., "camelCase" becomes "Camel sase").
     *
     * @param string $key The key for which the label is to be retrieved or humanized.
     * @return string The corresponding label or a human-readable version of the key.
     */
    public static function getLabelOrHumanize(string $key): string
    {
        return self::DOSSIER_LABELS[$key] ?? ucfirst(strtolower(preg_replace('/([a-z])([A-Z])/', '$1 $2', $key)));
    }

   

}
