--TEST--
Test Keys
--FILE--
<?php

$pimple = new Pimple();
$pimple['foo'] = 123;
$pimple['bar'] = 123;

assert(array('foo', 'bar') == $pimple->keys());

echo "Done" . PHP_EOL;
?>
--EXPECT--
Done