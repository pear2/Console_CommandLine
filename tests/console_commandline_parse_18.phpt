--TEST--
Test for PEAR2_Console_CommandLine::parse() method (user argc/argv 2).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--FILE--
<?php

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'tests.inc.php';

$argv = array('somename', '-v', 'install', '-f', 'foo');
$argc = count($argv);
try {
    $parser = buildParser2();
    $result = $parser->parse($argc, $argv);
    var_dump($result);
} catch (PEAR2_Console_CommandLine_Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
--EXPECT--
object(PEAR2_Console_CommandLine_Result)#23 (4) {
  ["options"]=>
  array(4) {
    ["verbose"]=>
    bool(true)
    ["logfile"]=>
    NULL
    ["help"]=>
    NULL
    ["version"]=>
    NULL
  }
  ["args"]=>
  array(0) {
  }
  ["command_name"]=>
  string(7) "install"
  ["command"]=>
  object(PEAR2_Console_CommandLine_Result)#25 (4) {
    ["options"]=>
    array(2) {
      ["force"]=>
      bool(true)
      ["help"]=>
      NULL
    }
    ["args"]=>
    array(1) {
      ["package"]=>
      string(3) "foo"
    }
    ["command_name"]=>
    bool(false)
    ["command"]=>
    bool(false)
  }
}