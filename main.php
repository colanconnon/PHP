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


?>