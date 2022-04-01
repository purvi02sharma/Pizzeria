<?php 

session_start();
session_destroy();

header("Location: visit.php");

?>