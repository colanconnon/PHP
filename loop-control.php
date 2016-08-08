<?php 

    $number = array_filter(range(0, 100), function($item) { return ($item % 3) == 0; });

    foreach($number as $num) {
        echo ($num == 3 ? "Three \n" : "");
        echo ($num == 9 ? "Nine Nine Nine \n" : "");
        echo ($num == 15 ? "Fifteen Fifteen Fifteen Fifteen Fifteen \n" : "");
    }
?>