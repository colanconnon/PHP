<?php 

    $number = array_filter(range(0, 100), function($item) { return ($item % 3) == 0; });

?>