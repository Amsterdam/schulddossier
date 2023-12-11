<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

class AzureStorageLocal implements AzureStorageInterface
{
    // Returns a url that is is signed with a SAS
    public function generateURLForFileReading(string $blob): string
    {
        return "http://localhost:10000/devstoreaccount1/storage/$blob";
    }
}
