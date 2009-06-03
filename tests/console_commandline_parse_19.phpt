--TEST--
Test for PEAR2_Console_CommandLine::parse() method (subcommand help 1).
--STDIN--
some_package
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
-v install -f -
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = buildParser2();
try {
    $result = $parser->parse();
    print_r($result);
} catch (PEAR2_Console_CommandLine_Exception $exc) {
    echo $exc->getMessage();
}

?>
--EXPECT--
PEAR2_Console_CommandLine_Result Object
(
    [options] => Array
        (
            [verbose] => 1
            [logfile] => 
            [help] => 
            [version] => 
        )

    [args] => Array
        (
        )

    [command_name] => install
    [command] => PEAR2_Console_CommandLine_Result Object
        (
            [options] => Array
                (
                    [force] => 1
                    [help] => 
                )

            [args] => Array
                (
                    [package] => some_package

                )

            [command_name] => 
            [command] => 
        )

)
