<?php 

    $number = array_filter(range(0, 100), function($item) { return ($item % 3) == 0; });

    foreach($number as $num) {
        if($num % 7 == 0) {
            echo "Sevens are lucky, this number has " . ($num / 7);
            echo "\n";
        }
        else if ($num % 10 == 0){
            echo $num . " is a round number";
            echo "\n";
        } 
        if($num == $number[0]){
            echo "First number \n";
        }
        if($num == end($number)){
            echo "Last number \n";
        }
    }
?>