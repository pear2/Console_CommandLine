<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR2_Console_CommandLine package.
 *
 * A full featured package for managing command-line options and arguments 
 * hightly inspired from python optparse module, it allows the developper to 
 * easily build complex command line interfaces.
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
 * @version   SVN: $Id$
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     Class available since release 0.1.0
 */

// ensure that errors will be printed
error_reporting(E_ALL);
ini_set('display_errors',true);

// uncomment this when package won't be in the SandBox anymore
// $basedir = __DIR__ . '/..';
$basedir = __DIR__ . '/../..';

require_once $basedir . '/autoload.php';

new \pear2\Pyrus\Developer\PackageFile\PEAR2SVN(
    __DIR__,
    'PEAR2_Console_CommandLine'
);

$package = new \pear2\Pyrus\Package('package.xml');
$outfile = $package->name . '-' . $package->version['release'];
$creator = new \pear2\Pyrus\Package\Creator(
	new \pear2\Pyrus\Developer\Creator\Phar($outfile . '.tgz', false, Phar::TAR, Phar::GZ),
	$basedir . '/Exception/src',
	$basedir . '/Autoload/src',
	$basedir . '/MultiErrors/src'
);
$creator->render($package);
