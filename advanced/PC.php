<?php
require_once('./Workstation.php');
class PC extends Workstation {
    function __construct() {
        
    }
    
    function sayPc(){
        print("This is from pc \n");
    }
}

$pc = new PC();
$pc->sayPc();
?>