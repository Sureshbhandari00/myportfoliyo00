<?php
session_start();
$servername="localhost";
$username="root";
$password='';
$dbname="sureshdb";
$conn=mysqli_connect($servername, $username, $password,$dbname)or die();
// if($conn->connect_error){
// die("connection failed:" .$conn->connect_error);

// }
// echo "connected successfully to the config files";

?>