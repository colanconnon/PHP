<?php
class Computer
{
    protected $name = "test";
    function __construct() {
    }
    protected function printComputerName() {
        print($this->name);
    }
}
?>