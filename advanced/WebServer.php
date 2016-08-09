<?php


require_once('./Server.php');
require_once('./ProcessData.php');
use ServerNamespace\Server as Server;
require_once('./Trait.php');
class WebServer extends Server implements ProcessData {
    use ProcessFileTrait;
    function __construct() {
        
    }

    private function accessFiles() {
        print("Only can privately access the files\n");
    }

    public function TryAccessFile($hasPermission = false) {
        if($hasPermission) {
            $this->accessFiles();
        } else {
            print("No permissions\n");
        }
    }
    public function ProcessData($input) {
        print("Webserver Processes data: " . $input . "\n");
    }

    function sayServerType() {
        //override the parent class
        print("Web server \n");
    }
}



?>