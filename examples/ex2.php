<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR2_Console_CommandLine package.
 *
 * This example demonstrate the use of xml definitions files with 
 * PEAR2_Console_CommandLine, the result is the same as for the ex1.php file.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Console 
 * @package   PEAR2_Console_CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007-2009 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   GIT: $Id$
 * @link      http://pear2.php.net/PEAR2_Console_CommandLine
 * @since     File available since release 0.1.0
 */

// Include PEAR2 autoload
require_once 'PEAR2/Autoload.php';

// create the parser from xml file
$xmlfile = __DIR__ . DIRECTORY_SEPARATOR . 'ex2.xml';
$parser  = PEAR2_Console_CommandLine::fromXmlFile($xmlfile);


// run the parser
try {
    $result = $parser->parse();
    // write your program here...
    print_r($result->options);
    print_r($result->args);
} catch (Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
