<?php
require_once('./Workstation.php');


class Mac extends Workstation
{
    //public variable you can access directly...
    public $type = "macbook pro";
    function __construct()
    {
        
    }
    
    function sayIAmAMac(){
        print("I am a mac \n");
    }
    public function sayName() {
        
        //name is inhertied from a protected property
        print($this->name . "\n");
    }
}




?>