<?php

namespace Kolotoc\FileMakerApi;
/**
 * src API for PHP
 *
 * @package src
 *
 * Copyright © 2005-2009, src, Inc. All rights reserved.
 * NOTE: Use of this source code is subject to the terms of the src
 * Software License which accompanies the code. Your use of this source code
 * signifies your agreement to such license terms and conditions. Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by src.
 */

/**
 * Command class that edits a single record.
 * Create this command with {@link src::newEditCommand()}.
 *
 * @package src
 */
class FileMaker_Command_Edit extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @public FileMaker_Command_Edit_Implementation
     * @access private
     */
    public $_impl;

    /**
     * Edit command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the
     *        command was created by.
     * @param string $layout Layout the record is part of.
     * @param string $recordId ID of the record to edit.
     * @param array $values Associative array of field name => value pairs.
     *        To set field repetitions, use a numerically indexed array for
     *        the value of a field, with the numeric keys corresponding to the
     *        repetition number to set.
     */
    function __construct($fm, $layout, $recordId, $updatedValues = array())
    {
        $this->_impl = new FileMaker_Command_Edit_Implementation($fm, $layout, $recordId, $updatedValues);
    }

    /**
     * Sets the new value for a field.
     *
     * @param string $field Name of the field to set.
     * @param string $value Value for the field.
     * @param integer $repetition Field repetition number to set,
     *        Defaults to the first repetition.
     */
    function setField($field, $value, $repetition = 0)
    {
        return $this->_impl->setField($field, $value, $repetition);
    }

    /**
     * Sets the new value for a date, time, or timestamp field from a
     * UNIX timestamp value.
     *
     * If the field is not a date or time field, then this method returns
     * an Error object. Otherwise, returns TRUE.
     *
     * If layout data for the target of this command has not already
     * been loaded, calling this method loads layout data so that
     * the type of the field can be checked.
     *
     * @param string $field Name of the field to set.
     * @param string $timestamp Timestamp value.
     * @param integer $repetition Field repetition number to set.
     *        Defaults to the first repetition.
     */
    function setFieldFromTimestamp($field, $timestamp, $repetition = 0)
    {
        return $this->_impl->setFieldFromTimestamp($field, $timestamp, $repetition);
    }

    /**
     * Sets the modification ID for this command.
     *
     * Before you edit a record, you can use the
     * {@link FileMaker_Record::getModificationId()} method to get the record's
     * modification ID. By specifying a modification ID when you execute an
     * Edit command, you can make sure that you are editing the current version
     * of a record. If the modification ID value you specify does not match the
     * current modification ID value in the database, the Edit command is not
     * allowed and an error code is returned.
     *
     * @param integer $modificationId Modification ID.
     */
    function setModificationId($modificationId)
    {
        $this->_impl->setModificationId($modificationId);
    }

}
