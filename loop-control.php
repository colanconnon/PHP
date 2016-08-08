<?php 

    $number = array_filter(range(0, 100), function($item) { return ($item % 3) == 0; });
    $i = 0;
    do {
        //get all the array keys so i can access array by index
        $keys = array_keys($number);
        $num = $number[$keys[$i]];
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
        $i++;
    } while($i < count($number));
?>