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

    echo sprintf("THE RESULTS OF %d * %d is: %d \n", $array["TWO"], $array["THREE"], $result);

?>