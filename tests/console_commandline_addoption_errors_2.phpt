--TEST--
Test for PEAR2_Console_CommandLine::addOption() method (errors 2).
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = new PEAR2_Console_CommandLine();
$parser->addOption('name', array());

?>
--EXPECTF--

Fatal error: you must provide at least an option short name or long name for option "name" in %sCommandLine.php on line %d
