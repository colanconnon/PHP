<?php

/**
*
*/
require_once('./Server.php');
class DatabaseServer extends Server
{
    function __construct() {
        
    }

    function sayDatabaseServer() {
        print("This is from database server");
    }
}
?>