<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div container>
    <div class="row">
      <div class="col-6 offset-3">
        <div class="card text-center" style="margin-top: 100px;">
          <div class="card-header">
          <h1>Log In</h1>
          </div>
          <div class="card-body">
            <form method="POST">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Phone</span>
                </div>
                <input type="number" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="mobile">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Password</span>
                </div>
                <input type="password" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="password">
              </div>
              <div class="col-12" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Remember
                    </label>
                  </div>
              </div>
              <button type="submit" style="margin: 10px; width: 30%;" class="btn btn-danger " name="login_form">Sign in</button> 
            </form>
            <div class="card-footer text-center ">
            <p>Not a member? <a href="register.php" style="color: red;">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <?php
    include('databaseconnect.php');
    include('function.php');
    if (isset($_POST["login_form"])) {

        $phone = $_POST["mobile"];
        $pass = $_POST["password"];

        if ($phone == 11111){

          $sql = "SELECT * FROM admin WHERE phone='".$phone."' and password='".$pass."'";

          $res = mysqli_query($con,$sql);

          if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);
            $name = $row['name'];
            session_start();
            $_SESSION['adminname'] =$name;
            redirect('Admin/index.php'); 
          }
          else{
            echo "<script>alert('Invalid Admin Phone/Password')</script>";
          }
        }
        else if ($phone == 22222)
        {

          $sql = "SELECT * FROM employee WHERE password='".$pass."'";
          $res = mysqli_query($con,$sql);
         
          if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['employee'] = "employee";
            $_SESSION['name'] = $row['name'];
            redirect('employee/emp_search.php');

          }else{
            echo "<script>alert('Invalid Employee Phone/Password')</script>";
          }


        }
        else{
        
        $sql = "SELECT * FROM registration WHERE phone='" . $phone . "'
        AND password='" . $pass . "'";

        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) == 1) {
            $row = mysqli_fetch_assoc($res);
            $user = $row['Name'];
            $phone = $row['Phone'];
            session_start();
            $_SESSION["username"] = $user;
            $_SESSION["phone"] = $phone;
            redirect("index.php");

        }else{
            echo "<script>alert('Invalid User Phone/Password')</script>";
        }
    }
  }
    ?>
</body>
</html>