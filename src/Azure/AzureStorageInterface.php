<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

interface AzureStorageInterface
{
    public function generateURLForFileReading(string $filename, ?string $destinationPath): string;
}
