<?php
include('header.php');
?>
<div class="container" style="margin-top: 50px;">
    <div class="jumbotron">
    <form method="POST" style="padding-left: 100px; padding-right: 100px; ">
        <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">
            <strong><h1 class="display-4">REQUEST HERE</h1></strong>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">BloodGroup</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="bggroup">
                <option selected>A+</option>
                <option >A-</option>
                <option >B+</option>
                <option >B-</option>
                <option >AB+</option>
                <option >AB-</option>
                <option >O+</option>
                <option >O-</option>
            </select>
        </div>
        <div class="input-group mb-3" style="padding-top: 15px;">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Date</span>
        </div>
        <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" name="reqdate">
        </div>
        <div class="input-group" style="padding-top: 15px;">
        <div class="input-group-prepend">
            <span class="input-group-text">Enter Details</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" name="detail"></textarea>
        </div>
        <div class="text-center" style="padding-top: 30px;">
            <button type="submit" class="btn btn-danger " name="request_submit" style="margin: 10px; width: 30%;" >Submit</button>
        </div>
    </form>
    </div> 
</div>


<?php 

if(isset($_POST['request_submit'])){
    $blood_group = $_POST['bggroup'];
    $request_date = $_POST['reqdate'];
    $detail = $_POST['detail'];
    
    if(isset($_SESSION['phone'])){
        $phone = $_SESSION['phone'];
    }

    $sql = "SELECT * FROM registration WHERE phone='" . $phone . "'";

    $res = mysqli_query($con,$sql);

    if (mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        $name = $row['Name'];
        $gender = $row['Gender'];
        $age = $row['Age'];
        $email = $row['email'];
       
        $sql = "INSERT INTO request(name,age,gender,mobile,email,bloodgroup,requireddate,details) values ('".$name."','".$age."','".$gender."','".$phone."','".$email."','".$blood_group."','".$request_date."','".$detail."')";
        $n = mysqli_query($con, $sql);
        if($n == 1){
            echo"<script> alert('Request accepted') </script>";
        }
    }
    else{
        echo "<script>alert('Server Failed')</script>";
    }
}
include('footer.php');
?>
