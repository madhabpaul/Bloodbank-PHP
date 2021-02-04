<?php
include('../databaseconnect.php');
include('../function.php');
session_start();
unset($_SESSION['adminname']);
redirect('../login.php');
?>