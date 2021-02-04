
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/fec88a570a.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
include('databaseconnect.php');
include('function.php');

session_start();
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $phone = $_SESSION['phone'];
}
else{
  redirect('login.php');
}

?>
<div class="content" >

  <div style="background: #FF3E3E; padding-left: 150px; margin-bottom: 0px;">
    <div class="container">
    <img src="images/slogan3.png"  >
    </div>
  </div>
 
<nav class="navbar navbar-expand-lg navbar-dark " style="background: #F90000">
<div class="container"> 
  <a class="navbar-brand" href="#"><img src="images/logo4.png" alt="" srcset="" height="35px" width="80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
      <li class="nav-item  ml--10">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request.php">Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="camps.php">Camps</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 5px;">
    <div class="dropdown" style="border: none;">
      <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo strtoupper($user) ?>
      <i style="padding: 5px;"class="fas fa-user fa-lg"></i></span>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 5px; text-align: left;  min-width: 120px; background: white; border: none; ">
        <a class="dropdown-item" href="profile.php">My Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a> 
      </div>
    </div> 
    </form>
  </div>
  </div>
</nav>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
