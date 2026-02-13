<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\LogFormatter;

use Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Log\LogFormatterInterface;
use Nelmio\SecurityBundle\ContentSecurityPolicy\Violation\Report;

class CSPLogFormatter implements LogFormatterInterface
{
    public function format(Report $report): string
    {
        // Customize the log format as needed
        return sprintf(
            'CSP Violation: %s on %s',
            $report->getUri(),
            $report->getData()['blocked-uri']
        );
    }
}
