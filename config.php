<?php
$_server = "localhost";
$_username = "root";
$_password = "";
$_database = "authentication3";

$conn = mysqli_connect($_server, $_username, $_password, $_database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    // echo "Connection Successfull";
}
