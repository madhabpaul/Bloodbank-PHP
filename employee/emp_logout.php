<?php
include('../databaseconnect.php');
include('../function.php');
session_start();
unset($_SESSION['employee']);
unset($_SESSION['name']);
redirect('../login.php');
?>