<?php

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
 * @version   GIT: $Id$
 * @link      http://pear2.php.net/PEAR2_Console_CommandLine
 */

$packages = array(
    'pear2.php.net' => array(
        'PEAR2_Autoload'
    )
);

$extrafiles = array();
$config = Pyrus\Config::current();
$registry = $config->registry;
$phpDir = $config->php_dir;

foreach ($packages as $channel => $channelPackages) {
    foreach ($channelPackages as $package) {
        foreach ($registry->toPackage($package, $channel)->installcontents
            as $file => $info) {
            if (strpos($file, 'php/') === 0) {
                $filename = substr($file, 4);
                $extrafiles['src/' . $filename]
                    = realpath($phpDir . DIRECTORY_SEPARATOR . $filename);
            }
        }
    }
}