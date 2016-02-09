<?php

namespace Kolotoc\FileMakerApi;

class FileMaker_Command_FindAll_Implementation extends FileMaker_Command_Find_Implementation
{
    function __construct($V0ab34ca9, $Vc6140495)
    {
        parent::__construct($V0ab34ca9, $Vc6140495);
    }

    function execute()
    {
        $V21ffce5b = $this->_getCommandParams();
        $V21ffce5b['-findall'] = true;
        $this->_setSortParams($V21ffce5b);
        $this->_setRangeParams($V21ffce5b);
        $V0f635d0e = $this->_fm->_execute($V21ffce5b);
        if (FileMaker::isError($V0f635d0e)) {
            return $V0f635d0e;
        }
        return $this->_getResult($V0f635d0e);
    }
}
