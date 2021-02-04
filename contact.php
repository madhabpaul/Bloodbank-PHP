<?php 
    include('header.php');

    if(isset($_POST['contact_submit'])){
        $subject = $_POST['subject'];
        $description = $_POST['description'];
        if(isset($_SESSION['username'])){
            $name = $_SESSION['username'];
            $phone = $_SESSION['phone'];
        }
        $sql = "INSERT INTO contact(subject,description,name,phone) VALUES('".$subject."','".$description."','".$name."','".$phone."')";
        $res = mysqli_query($con,$sql);
        if($res == False){

            echo "<script>alert('Sorry! Something went wrong')</script>";

        }else{
            echo "<script>alert('Successfull! We will contact you soon')</script>";
        }
    }
?>
<br>
<div class="container card mt-20">
<br>
    <form method="POST" class=" text-center">
        <div class="card-header text-center" >
            <h1 class="display-4" >CONTACT FORM</h1>
        </div>
        <br>
        <div class="input-group mb-3 pl-50 pr-50">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Subject</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="subject">
        </div>
        <div class="input-group pl-50 pr-50">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <textarea class="form-control" aria-label="With textarea " name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary " name="contact_submit">Submit</button>
    </form>
</div>
<?php 
    include('footer.php');
?>