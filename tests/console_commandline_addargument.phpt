--TEST--
Test for PEAR2_Console_CommandLine::addArgument() method.
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

$parser = new PEAR2_Console_CommandLine();
$parser->addArgument('arg1');
$parser->addArgument('arg2', array(
    'multiple' => true,
    'description' => 'description of arg2'
));
$arg3 = new PEAR2_Console_CommandLine_Argument('arg3', array(
    'multiple' => true,
    'description' => 'description of arg3'    
));
$parser->addArgument($arg3);

var_dump($parser->args);

// a bad argument
$parser->addArgument('Some invalid name');

?>
--EXPECTF--
array(3) {
  ["arg1"]=>
  object(PEAR2_Console_CommandLine_Argument)#8 (4) {
    ["multiple"]=>
    bool(false)
    ["name"]=>
    string(4) "arg1"
    ["help_name"]=>
    string(4) "arg1"
    ["description"]=>
    NULL
  }
  ["arg2"]=>
  object(PEAR2_Console_CommandLine_Argument)#9 (4) {
    ["multiple"]=>
    bool(true)
    ["name"]=>
    string(4) "arg2"
    ["help_name"]=>
    string(4) "arg2"
    ["description"]=>
    string(19) "description of arg2"
  }
  ["arg3"]=>
  object(PEAR2_Console_CommandLine_Argument)#10 (4) {
    ["multiple"]=>
    bool(true)
    ["name"]=>
    string(4) "arg3"
    ["help_name"]=>
    string(4) "arg3"
    ["description"]=>
    string(19) "description of arg3"
  }
}

Fatal error: argument name must be a valid php variable name (got: Some invalid name) in %sCommandLine.php on line %d
