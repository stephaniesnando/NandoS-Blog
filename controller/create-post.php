<?php
require_once(__DIR__ . "/../model/config.php");

$connection = new mysqli($host, $username,$password, $database );

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");

if($query){
    //After the user submits everything a message will be echoed out which will say "Successfully inserted psot: whatever they titled it."
    echo "<p>Successfully inserted post: $title </p>";
}
 else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}



