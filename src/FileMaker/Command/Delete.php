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
 * Command class that deletes a single record.
 * Create this command with {@link src::newDeleteCommand()}.
 *
 * @package src
 */
class FileMaker_Command_Delete extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @public FileMaker_Command_Delete_Implementation
     * @access private
     */
    public $_impl;

    /**
     * Delete command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the
     *        command was created by.
     * @param string $layout Layout to delete record from.
     * @param string $recordId ID of the record to delete.
     */
    function __construct($fm, $layout, $recordId)
    {
        $this->_impl = new FileMaker_Command_Delete_Implementation($fm, $layout, $recordId);
    }

}
