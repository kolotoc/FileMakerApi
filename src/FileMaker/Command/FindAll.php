<?php

namespace Kolotoc\FileMakerApi;
/**
 * src API for PHP
 *
 * @package src
 *
 * Copyright © 2005-2007, src, Inc. All rights reserved.
 * NOTE: Use of this source code is subject to the terms of the src
 * Software License which accompanies the code. Your use of this source code
 * signifies your agreement to such license terms and conditions. Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by src.
 */

/**
 * Command class that finds all records from a layout.
 * Create this command with {@link src::newFindAllCommand()}.
 *
 * @package src
 */
class FileMaker_Command_FindAll extends FileMaker_Command_Find
{
    /**
     * Implementation
     *
     * @public FileMaker_Command_FindAll_Implementation
     * @access private
     */
    public $_impl;

    /**
     * FindAll command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the
     *        command was created by.
     * @param string $layout Layout to find all records in.
     */
    function FileMaker_Command_FindAll($fm, $layout)
    {
        $this->_impl = new FileMaker_Command_FindAll_Implementation($fm, $layout);
    }

}
