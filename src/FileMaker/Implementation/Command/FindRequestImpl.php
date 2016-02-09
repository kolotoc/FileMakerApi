<?php

namespace Kolotoc\FileMakerApi;

class FileMaker_Command_FindRequest_Implementation
{
    public $_findCriteria = array();

    public $_omit;

    function __construct()
    {
        $this->_omit = false;
    }

    function addFindCriterion($Vd1148ee8, $Ve9de89b0)
    {
        $this->_findCriteria[$Vd1148ee8] = $Ve9de89b0;
    }

    function setOmit($V2063c160)
    {
        $this->_omit = $V2063c160;
    }

    function clearFindCriteria()
    {
        $this->_findCriteria = array();
    }
}
