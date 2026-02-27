<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Constants;

class DossierFormLabel
{

    public const DOSSIER_FORM_LABELS = [
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
     * Retrieves a form label for a given key.
     *
     * This method attempts to fetch a label from the `DOSSIER_FORM_LABELS` constant using the provided key.
     * If the key does not exist in `DOSSIER_FORM_LABELS`, it will return the key itself.
     *
     * @param string $key The key for which the label is to be retrieved.
     * @return string The corresponding form label or the key if no label is found.
     */
    public static function getFormLabel(string $key): string
    {
        return self::DOSSIER_FORM_LABELS[$key] ?? $key;
    }

    /**
     * Retrieves a label for a given key or generates a human-readable version of the key.
     *
     * This method attempts to fetch a label from the `DOSSIER_LABELS` constant using the provided key.
     * If the key does not exist in `DOSSIER_FORM_LABELS`, it will generate a human-readable label by converting
     * the key from camelCase to a spaced and capitalized format (e.g., "camelCase" becomes "Camel case").
     *
     * @param string $key The key for which the form label is to be retrieved or humanized.
     * @return string The corresponding form label or a human-readable version of the key.
     */
    public static function getFormLabelOrHumanize(string $key): string
    {
        return self::DOSSIER_FORM_LABELS[$key] ?? ucfirst(strtolower(preg_replace('/([a-z])([A-Z])/', '$1 $2', $key)));
    }

   

}
