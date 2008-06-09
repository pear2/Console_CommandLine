--TEST--
Test for PEAR2_Console_CommandLine::parse() method (subcommand error).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
install -f 2>&1
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = buildParser2();
try {
    $result = $parser->parse();
} catch (Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
--EXPECT--
Error: you must provide at least 1 argument.
Type "some_program -h" to get help.
Type "some_program <command> -h" to get help on specific command.
