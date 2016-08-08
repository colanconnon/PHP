<?php
    function add($x, $y){
        return $x + $y;
    }

    function subtract($x, $y) {
        return $x - $y;
    }

    function multiply($x, $y) {
        return $x * $y;
    }
    function divide($x, $y, &$result) {
        $result = $x / $y;
    }
    $result = 0;
    divide(6, 3, $result);
    echo $result . "\n";

    echo multiply(3,5) . "\n";
    echo add(2, 2) . "\n";
    echo subtract(4, 2) . "\n";
?>