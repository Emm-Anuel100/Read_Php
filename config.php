<?php

$servername = "localhost";
$username = "root";
$password = "";
$DBname = "callfromdb";

//making connection to the server
$conn = new mysqli($servername, $username, $password, $DBname);

//checking the connection to the server
if ($conn->connect_error) {
    die ("Connection failed: " .$conn->connect_error);
}

?>
