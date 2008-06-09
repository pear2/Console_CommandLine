--TEST--
Test for PEAR2_Console_CommandLine::parse() method (user errors 3).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
-s fooz foo bar
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
option "string" must be one of the following: "foo", "bar", "baz" (got "fooz").