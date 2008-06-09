--TEST--
Test for PEAR2_Console_CommandLine::addOption() method (errors 1).
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = new PEAR2_Console_CommandLine();
$parser->addOption('Some invalid name');

?>
--EXPECTF--

Fatal error: option name must be a valid php variable name (got: Some invalid name) in %sCommandLine.php on line %d
