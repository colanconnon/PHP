<?php

/**
*
*/
require_once('./Computer.php');
class Server extends Computer
{
    function __construct() {
        
    }

    function sayServer() {
        print("This is from server");
    }
}

?>