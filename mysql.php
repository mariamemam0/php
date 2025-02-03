<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

$connection = new mysqli("localhost","root","","phpinfo");
$connection->query("insert into emp(fname,lname,email,pass) 
values('farida','Amr','farida@comm','1235')") ; 
var_dump($connection);
if($connection->connect_error){
    var_dump($connection->connect_error);
}
?>