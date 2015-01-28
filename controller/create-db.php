<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
    die("Error: " . $conncection->Connect_error);
}

$sexists = $connection->select_db($database);

if($exists) {
   echo "database exists"; 
}

$connection->close();