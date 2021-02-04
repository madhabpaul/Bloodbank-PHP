<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp Page</title>
    <link rel="stylesheet" href="../css/main.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/fec88a570a.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>

<?php
include('../databaseconnect.php');
include('../function.php');

session_start();
if(isset($_SESSION['employee'])){
    $employee_name = $_SESSION['name'];
}
else{
  redirect('../login.php');
}

?>

<div class="content" >

  <div style="background: #FF3E3E; padding-left: 150px; margin-bottom: 0px;">
    <div class="container">
    <img src="../images/slogan3.png"  >
    </div>
  </div>

<nav class="navbar navbar-expand-lg navbar-dark " style="background: #F90000">
<div class="container">
  <a class="navbar-brand" href=""><img src="../images/logo4.png" height="35px" width="80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="emp_blood_request.php">Requests</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Camps
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="emp_camps.php">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="emp_camps_view.php">View</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="emp_donation.php">Donar Entry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="emp_our_donars.php">Our Donars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="emp_contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="emp_search.php">Search</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 5px;">
    <div class="dropdown" style="border: none;">      
      <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo strtoupper($employee_name) ?><i style="padding: 5px;"class="fas fa-user fa-lg"></i></span>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-right: 5px; text-align: left;  min-width: 120px; background: white; border: none; ">
        <a class="dropdown-item" href="emp_logout.php">Logout</a> 
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
