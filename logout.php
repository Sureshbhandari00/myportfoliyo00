<?php
include 'config.php';
unset($_SESSION['id']);
unset($_SESSION['useradmin']);
unset($_SESSION['error']);
session_destroy();
header('location:index.php');

?>