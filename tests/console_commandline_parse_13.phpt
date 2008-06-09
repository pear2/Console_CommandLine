--TEST--
Test for PEAR2_Console_CommandLine::parse() method (user errors 1).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
--float=foo foo bar
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = buildParser1();
try {
    $result = $parser->parse();
} catch (Exception $exc) {
    echo $exc->getMessage();
}

?>
--EXPECT--
option "float" require a value of type float (got "foo").
