<?php

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

class SchuldHulpServiceGenerator
{

    public function generate()
    {
        $generator = new Generator();
        $soapClientOptions = [];

        $config = new Config([
            'inputFile' => '../doc/modified_schuldhulpservice.wsdl',
            'outputDir' => '../src/Allegro/SchuldHulpAlt',
            'namespaceName' => 'GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt',
            'soapClientOptions' => $soapClientOptions
        ]);
        $this->deleteClasses($config->get('outputDir'));
        $generator->generate($config);
        unlink($config->get('outputDir') . '/autoload.php');
    }

    public function deleteClasses(string $dir)
    {
        $files = glob($dir.'/*');
        foreach($files as $file){
            if(is_file($file))
                unlink($file);
        }
    }
}
