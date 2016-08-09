<?php
class Computer
{
    protected $name = "test";
    function __construct() {
    }
    protected function printComputerName() {
        print($this->name);
    }

    public function turnOn($callback) {
        print("Computer is turned on now you can do something \n");
        $callback(true);
    }
}

?>