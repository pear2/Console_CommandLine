--TEST--
Test for PEAR2_Console_CommandLine::addOption() method (errors 5).
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = new PEAR2_Console_CommandLine();
$parser->addOption('name', array('short_name'=>'-d', 'action'=>true));

?>
--EXPECTF--

Fatal error: invalid action for option "name". in %sCommandLine.php on line %d
