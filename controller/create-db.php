<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error){
    die("Error: " . $conncection->Connect_error);
}

$exists = $connection->select_db($database);

if(!$exists) {
  $query = $connection->query("CREATE DATABASE $database");
  
  if($query){
      echo "Succesfully created database: " . $database;
  }
  }else{
      echo "data base already  exists. ";
  }

  $query = $connection->query("CREATE TABLE posts("
          . "id int(11) NOT NULL AUTO_INCREMENT,"
          . "title varchara(255) NOT NULL"
          . "post text NOT NULL"
          . "PRIMARY KEY (id))");


$connection->close();