--TEST--
Test for PEAR2_Console_CommandLine::fromXmlFile() method (error).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
--help 2>&1
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

// unexisting xml file
$parser = PEAR2_Console_CommandLine::fromXmlFile(__DIR__ . DIRECTORY_SEPARATOR . 'unexisting.xml');
$parser->parse();

?>
--EXPECTF--

Fatal error: XML definition file "%sunexisting.xml" does not exists or is not readable in %sCommandLine.php on line %d
