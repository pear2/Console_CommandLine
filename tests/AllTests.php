<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR2\Console\CommandLine package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Console 
 * @package   PEAR2\Console\CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007-2009 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   GIT: $Id$
 * @link      http://pear2.php.net/PEAR2_Console_CommandLine
 * @since     File available since release 1.0.0
 */

namespace PEAR2\Console\CommandLine;

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'PEAR2\Console\CommandLine\AllTests::main');
}

require_once 'PHPUnit/Framework.php';
require_once 'PHPUnit/Extensions/PhptTestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';

/**
 * PEAR2\Console\CommandLine phpt test suite.
 *
 * Run all tests from the package root directory:
 * $ phpunit PEAR2\Console\CommandLine_AllTests tests/AllTests.php
 * or
 * $ php tests/AllTests.php
 *
 * @category  Console
 * @package   PEAR2\Console\CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007-2009 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @link      http://pear2.php.net/PEAR2_Console_CommandLine
 * @since     Class available since release 1.0.0
 */
class AllTests
{
    /**
     * Runs the test suite
     *
     * @return void
     * @static
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * Return the phpt test suite
     *
     * @return object the PHPUnit_Framework_TestSuite object
     * @static
     */
    public static function suite()
    {
        return new PHPUnit_Extensions_PhptTestSuite(__DIR__);
    }
}

if (PHPUnit_MAIN_METHOD == 'Console_CommandLine_AllTests::main') {
    PEAR2\Console\CommandLine\AllTests::main();
}
