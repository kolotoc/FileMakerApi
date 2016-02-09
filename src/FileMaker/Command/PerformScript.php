<?php

namespace Kolotoc\FileMakerApi;
/**
 * src API PHP
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
 * Command class that performs a ScriptMaker script.
 * Create this command with {@link src::newPerformScriptCommand()}.
 *
 * @package src
 */
class FileMaker_Command_PerformScript extends FileMaker_Command
{
    /**
     * Implementation
     *
     * @public FileMaker_Command_PerformScript_Implementation
     * @access private
     */
    public $_impl;

    /**
     * PerformScript command constructor.
     *
     * @ignore
     * @param FileMaker_Implementation $fm FileMaker_Implementation object the
     *        command was created by.
     * @param string $layout Layout to use for script context.
     * @param string $scriptName Name of the script to run.
     * @param string $scriptParameters Any parameters to pass to the script.
     */
    function __construct($fm, $layout, $scriptName, $scriptParameters = null)
    {
        $this->_impl = new FileMaker_Command_PerformScript_Implementation($fm, $layout, $scriptName, $scriptParameters);
    }

}
