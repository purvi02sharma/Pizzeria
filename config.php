<?php 

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "loginPizza";

$conn = mysqli_connect($server, $user, $pass,$database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
else
{
    $sql="CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
)";

if($conn->query($sql) === TRUE) {
    }
    else{
        die("<script>alert('Connection Failed.')</script>");
        }
        $conn->close();
}
?>