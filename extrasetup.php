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

$extrafiles = array();
$phpDir = Pyrus\Config::current()->php_dir;
$packages = array('PEAR2/Autoload');

$oldCwd = getcwd();
chdir($phpDir);
foreach ($packages as $pkg) {
    if (is_dir($pkg)) {
        foreach (new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(
                $pkg,
                RecursiveDirectoryIterator::UNIX_PATHS
                | RecursiveDirectoryIterator::SKIP_DOTS
            ),
            RecursiveIteratorIterator::LEAVES_ONLY
        ) as $path) {
            $extrafiles['src/' . $path->getPathname()] = $path->getRealPath();
        }
    }

    if (is_file($pkg . '.php')) {
        $extrafiles['src/' . $pkg . '.php']
            = $phpDir . DIRECTORY_SEPARATOR . $pkg . '.php';
    }
}
chdir($oldCwd);
