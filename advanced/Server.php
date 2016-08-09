<?php

namespace ServerNamespace {
    require_once('./Computer.php');
    use Computer;
    class Server extends Computer
    {
        function __construct() {
            
        }
        
        function sayServerType() {
            print("This is from server \n");
        }
        
        function ProcessFile() {
            print("Server is Processing file \n");
        }
    }
}


?>