<?php
require('./constants.php');
$array = [
"HELLO_WORLD" => HELLO_WORLD,
"TWO" => TWO,
"THREE" => THREE,
"MY_NAME" => MY_NAME,
"FIVE" => FIVE
];

$result = $array["TWO"] * $array["THREE"];

$WORLD = "WORLD";
$TEST = "TEST";
$ONE  = 1;
$TWO = 2;
$THREE = 3;


$multiLine = <<<HERE
hello $WORLD!

this a $TEST string...

the sum of $ONE plus $TWO is $THREE \n
HERE;

echo $multiLine;
?>