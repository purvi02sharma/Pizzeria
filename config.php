<?php 

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "loginPizza";

$con = mysqli_connect($server, $user, $pass,$database);

if (!$con) {
    die("<script>alert('Connection Failed.')</script>");
}

?>