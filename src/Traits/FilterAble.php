<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Traits;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Component\HttpFoundation\Request;

/**
 * Trait FilterAble
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Traits
 */
trait FilterAble
{

    private array $allowedFilterFields = [
        't.naam',
        'g.email',
        'g.naam',
    ];


    /**
     * Check if the request contains filter fields that are not allowed.
     *
     * @param Request $request The HTTP request to check.
     *
     * @return bool True if forbidden filter fields are present, false otherwise.
     */
    public function containsForbiddenFilterFields(Request $request): bool
    {
        if (
            $request->query->has('filterField') &&
            !in_array($request->query->get('filterField'), $this->allowedFilterFields, true)
        ) {
            return true;
        }

        return false;
    }

    /**
     * Generate a URL without filter parameters.
     *
     * @param Request $request The HTTP request to generate the URL from.
     *
     * @return string The generated URL without filter parameters.
     */
    public function generateUnfilteredUrl(Request $request): string
    {
        $request->query->remove('filterField');
        $request->query->remove('filterValue');

        $url = $request->getSchemeAndHttpHost() .
            $request->getPathInfo();

        if (count($request->query->all()) > 0) {
            $url .= '?' .
                http_build_query($request->query->all());
        }

        return $url;
    }
}
