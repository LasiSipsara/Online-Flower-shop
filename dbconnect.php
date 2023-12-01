<?php
$server="localhost";
$userName="root";
$Password="";
$Database="flower shop";

$connection=new mysqli($server,$userName,$Password,$Database);

if($connection->connect_error){
    echo"error in connection".$connection->connect_error;
}



?>