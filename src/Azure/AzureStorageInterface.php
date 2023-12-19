<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

interface AzureStorageInterface
{
    public function generateURLForFileReading(string $blob, ?string $destinationPath): string;
}
