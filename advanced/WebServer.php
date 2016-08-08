<?php

/**
*
*/
require_once('./Server.php');
class WebServer extends Server
{
    function __construct() {
        
    }

    function sayWebServer() {
        print("This is from web server");
    }
}

?>