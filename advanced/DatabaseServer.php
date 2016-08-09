<?php

/**
*
*/
require_once('./Server.php');
use ServerNamespace\Server as Server;
class DatabaseServer extends Server
{
    private $dbType;
    function __construct() {
        
    }
    function SetDbType($dbType){
        //hide private variable and access it only through public getters and setters
        $this->dbType = $dbType;
    }
    function sayDatabaseServer() {
        print("This is from database server");
    }
    function sayServerType() {

        //implement the server type
        parent::sayServerType();
        print("Database server \n");
    }
    
    function GetDbType() {
        //hide private variable and access it only through public getters and setters
        return $this->dbType;
    }
}

?>