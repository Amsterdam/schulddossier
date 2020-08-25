<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SimpleDataResultEx extends SimpleDataResult
{

    /**
     * @param string $TableName
     * @param SimpleFieldInfoArray $FieldInfo
     * @param StringArrayArray $Data
     */
    public function __construct($TableName, $FieldInfo, $Data)
    {
      parent::__construct($TableName, $FieldInfo, $Data);
    }

}
