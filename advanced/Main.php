<?php
require_once('./Computer.php');
require_once('./DatabaseServer.php');
require_once('./Mac.php');
require_once('./PC.php');
require_once('./Server.php');
require_once('./WebServer.php');
require_once('./Workstation.php');

$mac = new Mac();

$mac->sayName();
//can modify the public properties directly.
$mac->type = "Macbook Pro";
print($mac->type . "\n");


$database = new DatabaseServer();
$database->SetDbType("MySql");

print($database->GetDbType() . "\n");

print($database->sayServerType() . "\n");

$computer = new Computer();
$computer->turnOn(function($success) {
    if($success) {
        print("Doing something now that the computer is turned on! \n");
    } 
});

$webServer = new WebServer();
$webServer->TryAccessFile(true);
$webServer->sayServerType();
$webServer->ProcessData("Some Data");
$webServer->ProcessFile("RandomFile");

$pc = new PC();
$pc->sayPc()();

?>