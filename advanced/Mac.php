<?php
    require_once('./Workstation.php');


    class Mac extends Workstation
    {
        
        function __construct($name)
        {
            $this->name = $name;
        }

        function sayIAmAMac(){
            print("I am a mac \n");
        }
        public function printComputerName() {
            parent::printComputerName();
        }
    }
    
$mac = new Mac("MAc");
$mac->sayIAmAMac();
$mac->printComputerName();

?>