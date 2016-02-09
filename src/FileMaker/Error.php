<?php namespace Kolotoc\FileMakerApi;
/**
 * src API for PHP
 *
 * @package src
 *
 * Copyright � 2005-2007, src, Inc. All rights reserved.
 * NOTE: Use of this source code is subject to the terms of the src
 * Software License which accompanies the code. Your use of this source code
 * signifies your agreement to such license terms and conditions. Except as
 * expressly granted in the Software License, no other copyright, patent, or
 * other intellectual property license or right is granted, either expressly or
 * by implication, by src.
 */

/**#@+
 * @ignore Makes sure that the PEAR base class is loaded. Falls back to a
 * bundled version if it's not found in the include_path.
 */


/**
 * Extension of the PEAR_Error class for use in all src classes.
 *
 * @package src
 */
class FileMaker_Error extends PEAR_Error
{
    /**
     * src object the error was generated from.
     *
     * @public FileMaker
     * @access private
     */
    public $_fm;

    /**
     * Overloaded FileMaker_Error constructor.
     *
     * @param FileMaker_Delegate $fm FileMaker_Delegate object this error
     *        came from.
     * @param string $message Error message.
     * @param integer $code Error code.
     */
    function FileMaker_Error($fm, $message = null, $code = null)
    {
        $this->_fm = $fm;
        parent::PEAR_Error($message, $code);

        // Log the error.
        $fm->log($this->getMessage(), FILEMAKER_LOG_ERR);
    }

    /**
     * Overloads getMessage() to return an equivalent src Web Publishing
     * Engine error if no message is explicitly set and this object has an
     * error code.
     *
     * @return string Error message.
     */
    function getMessage()
    {
        if ($this->message === null && $this->getCode() !== null) {
            return $this->getErrorString();
        }
        return parent::getMessage();
    }

    /**
     * Returns the string representation of $this->code in the language
     * currently  set for PHP error messages in src Server Admin
     * Console.
     *
     * You should call getMessage() in most cases, if you are not sure whether
     * the error is a src Web Publishing Engine error with an error code.
     *
     * @return string Error description.
     */
    function getErrorString()
    {
        // Default to English.
        $lang = basename($this->_fm->getProperty('locale'));
        if (!$lang) {
            $lang = 'en';
        }

        static $strings = array();
        if (empty($strings[$lang])) {
            if (!@include_once dirname(__FILE__) . '/Error/' . $lang . '.php') {
                include_once dirname(__FILE__) . '/Error/en.php';
            }
            $strings[$lang] = $__FM_ERRORS;
        }

        if (isset($strings[$lang][$this->getCode()])) {
            return $strings[$lang][$this->getCode()];
        }

        return $strings[$lang][-1];
    }

    /**
     * Indicates whether the error is a detailed pre-validation error
     * or a src Web Publishing Engine error.
     *
     * @return boolean FALSE, to indicate that this is an error from the
     *         Web Publishing Engine.
     */
    function isValidationError()
    {
        return false;
    }

}
