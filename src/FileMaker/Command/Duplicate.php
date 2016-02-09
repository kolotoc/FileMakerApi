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
 * Command class that duplicates a single record.
 * Create this command with {@link src::newDuplicateCommand()}.
 *
 * @package src
 */
class FileMaker_Command_Duplicate extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @public FileMaker_Command_Duplicate_Implementation
     * @access private
     */
    public $_impl;

    /**
     * Duplicate command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the
     *        command was created by.
     * @param string $layout Layout the record to duplicate is in.
     * @param string $recordId ID of the record to duplicate.
     */
    function __construct($fm, $layout, $recordId)
    {
        $this->_impl = new FileMaker_Command_Duplicate_Implementation($fm, $layout, $recordId);
    }

}
