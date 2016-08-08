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
// $result = 0;
// divide(6, 3, $result);
// echo $result . "\n";

// echo multiply(3,5) . "\n";
// echo add(2, 2) . "\n";
// echo subtract(4, 2) . "\n";

function comparsion($x, $y, $compare = false) {
    if($x == $y) {
        echo "Parameters are equal \n";
        if($compare) echo $x === $y ? "Data types are equal" : "Data types are not equal \n";
    }
}

echo comparsion(4, "4");
echo comparsion(5, "5", true);
echo comparsion(4, 4.0);
echo comparsion(5, 5.0, true);
?>