<?php namespace Kolotoc\FileMakerApi;

class FileMaker_Result_Implementation
{
    public $_fm;
    public $_layout;
    public $_records;
    public $_tableCount;
    public $_foundSetCount;
    public $_fetchCount;

    function FileMaker_Result_Implementation($V0ab34ca9)
    {
        $this->_fm = $V0ab34ca9;
    }

    function getLayout()
    {
        return $this->_layout;
    }

    function getRecords()
    {
        return $this->_records;
    }

    function getFields()
    {
        return $this->_layout->listFields();
    }

    function getRelatedSets()
    {
        return $this->_layout->listRelatedSets();
    }

    function getTableRecordCount()
    {
        return $this->_tableCount;
    }

    function getFoundSetCount()
    {
        return $this->_foundSetCount;
    }

    function getFetchCount()
    {
        return $this->_fetchCount;
    }

    function getFirstRecord()
    {
        return $this->_records[0];
    }

    function getLastRecord()
    {
        return $this->_records[sizeof($this->_records) - 1];
    }
}
