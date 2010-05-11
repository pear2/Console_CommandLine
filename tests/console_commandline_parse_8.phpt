--TEST--
Test for pear2\Console\CommandLine::parse() method (special cases 2).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
-t foo bar -f 2>&1
--FILE--
<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'tests.inc.php';

try {
    $parser = buildParser1();
    $parser->force_posix = true;
    $result = $parser->parse();
    var_dump($result);
} catch (pear2\Console\CommandLine\Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
--EXPECT--
object(pear2\Console\CommandLine\Result)#19 (4) {
  ["options"]=>
  array(11) {
    ["true"]=>
    bool(true)
    ["false"]=>
    NULL
    ["int"]=>
    int(1)
    ["float"]=>
    float(1)
    ["string"]=>
    NULL
    ["counter"]=>
    NULL
    ["callback"]=>
    NULL
    ["array"]=>
    array(2) {
      [0]=>
      string(4) "spam"
      [1]=>
      string(3) "egg"
    }
    ["password"]=>
    NULL
    ["help"]=>
    NULL
    ["version"]=>
    NULL
  }
  ["args"]=>
  array(2) {
    ["simple"]=>
    string(3) "foo"
    ["multiple"]=>
    array(2) {
      [0]=>
      string(3) "bar"
      [1]=>
      string(2) "-f"
    }
  }
  ["command_name"]=>
  bool(false)
  ["command"]=>
  bool(false)
}
