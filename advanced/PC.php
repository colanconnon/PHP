<?php
require_once('./Workstation.php');
class PC extends Workstation {
    function __construct() {
        
    }
    
    function sayPc(){
        $pcType = "Windows 10";
        return function(){
            print("This is from pc \n");
        };
    }
}

?>