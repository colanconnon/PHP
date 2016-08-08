<?php
require_once('./math.php');

$math = new Math();
echo $math->add(2,2,2) . "\n";
echo $math->subtract(10, 5, 3) . "\n";
echo $math->divide(8, 4 ,4) . "\n";
echo $math->multiply(2, 2, 4) . "\n";

echo $math->add(2,3,4, 10) . "\n";
echo $math->subtract(10, 2, 8, 10) . "\n";
echo $math->divide(8, 4 ,2, 2) . "\n";
echo $math->multiply(16, 2, 4, 5) . "\n";

echo $math->add(5, 5) . "\n";
echo $math->subtract(10, 5, 10) . "\n";
echo $math->divide(8, 4 ,10, 20) . "\n";
echo $math->multiply(10, 10) . "\n";
?>