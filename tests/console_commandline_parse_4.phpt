--TEST--
Test for PEAR2_Console_CommandLine::parse() method (errors 1).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
-d 2>&1
--FILE--
<?php

require_once 'Console/CommandLine.php' ;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

try {
    $parser = buildParser1();
    $result = $parser->parse();
} catch (PEAR2_Console_CommandLine_Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
--EXPECT--
Error: unknown option "-d".
Type "some_program -h" to get help.
