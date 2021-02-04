<?php
include('function.php');
session_start();
unset($_SESSION['username']);
unset($_SESSION['phone']);
redirect('login.php');
?>
