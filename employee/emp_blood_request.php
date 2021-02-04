<?php
include('emp_header.php');


# Pending Blood Request
$sql_pending = "SELECT * FROM request WHERE Status ='Pending'";
$res_pending = mysqli_query($con,$sql_pending);
$blood_request_pending = mysqli_num_rows($res_pending);

# Processing Blood Request
$sql_processing = "SELECT * FROM request WHERE Status ='Processing'";
$res_processing = mysqli_query($con,$sql_processing);
$blood_request_processing = mysqli_num_rows($res_processing);

# Accepted Blood Request
$sql_accepted = "SELECT * FROM request WHERE Status ='Accepted'";
$res_accepted = mysqli_query($con,$sql_accepted);
$blood_request_accepted = mysqli_num_rows($res_accepted);


#If Processing Button is clicked
if(isset($_POST['submit_processing'])){

  $req_id = $_POST['submit_processing'];
  $bg_group = $_POST['bg_group'];
  
   # Update Blood Stock
   $sql_blood = "SELECT * FROM blood_stock";
   $res_blood = mysqli_query($con,$sql_blood);
   $row_blood = mysqli_fetch_assoc($res_blood);

   if( $row_blood[$bg_group] > 0)
   {
        $add_blood = $row_blood[$bg_group] - 1;

        $sql_blood_update = "UPDATE `blood_stock` SET `$bg_group`= $add_blood";
        $res_blood_update = mysqli_query($con,$sql_blood_update);
        
        # Update Request
        $sql = "UPDATE request SET Status = 'Processing' WHERE req_id = '".$req_id."'";
        $res = mysqli_query($con,$sql);
        
        if ($res == False){
     
           echo '<script>alert("Server Failed")</script>';
     
        }
        else{
         redirect('emp_blood_request.php');
       }
   }
   else{

        echo '<script>alert("Blood Not Available")</script>';
   }
 
  
}

# If Accepted Button is clicked
elseif(isset($_POST['submit_accepted'])){

   $req_id =  $_POST["submit_accepted"];
   $sql = "UPDATE request SET Status = 'Accepted' WHERE req_id = '".$req_id."'";
   $res = mysqli_query($con,$sql);
   if($res == False ){

        echo '<script>alert("Server Failed")</script>';
   }
   else{
    redirect('emp_blood_request.php');
   }
}

# If Pending Button is clicked
elseif(isset($_POST['submit_pending'])){

    $req_id =  $_POST["submit_pending"];
    $sql = "UPDATE request SET Status = 'Pending' WHERE req_id = '".$req_id."'";
    $res = mysqli_query($con,$sql);
    if($res == False ){
        '<script>alert("Server Failed")</script>';
    }
    else{

        redirect('emp_blood_request.php');
    }
 }

?>

<div class="container">
 <br>
    <div class="jumbotron ">
    <div class="container">
        <h1 class="display-4 ml-10">Pending Requests</h1>
        
        <?php if( $blood_request_pending > 0){ ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Request Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Age</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Requested BG</th>
                        <th scope="col">Request Date</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Change Status</th>
                        
                    </tr>
                </thead>
            <tbody>
            <?php 
            while($row_pending = mysqli_fetch_assoc($res_pending)){
                ?>
                    <tr>
                    <td><?php echo $row_pending['req_id'] ?></td>
                    <td><?php echo $row_pending['name'] ?></td>
                    <td><?php echo $row_pending['age'] ?></td>
                    <td><?php echo $row_pending['gender'] ?></td>
                    <td><?php echo $row_pending['mobile'] ?></td>
                    <td><?php echo $row_pending['email'] ?></td>
                    <td><?php echo $row_pending['bloodgroup'] ?></td>
                    <td><?php echo $row_pending['requireddate'] ?></td>
                    <td><?php echo $row_pending['details'] ?></td>
                    <td><?php echo $row_pending['Status'] ?></td>
                    <form method="POST"> 
                    <input type="hidden" name="bg_group" value="<?php echo $row_pending['bloodgroup'] ?>" >
                    <td><button type="submit"  name="submit_processing" value="<?php echo $row_pending['req_id'] ?>" class="btn btn-info btn-sm">Processing</button></td>
                    </form>
                    </tr>
                <?php
            }
            ?>
            </tbody>
         </table>
        
    <?php
    }
    else{
        ?>

        <h3 class="alert alert-warning">No Blood Request Pending Found</h3>

     <?php   
    }
    ?>
    </div>
</div>

<div class="jumbotron ">
<div class="container">
    <h1 class="display-4 ml-10">Processing Requests</h1>
    
    <?php if( $blood_request_processing > 0){ ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Request Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Blood Group Requested</th>
                    <th scope="col">Request Date</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Change Status</th>
                    
                </tr>
         </thead>
    <tbody>
        <?php 
        while($row_processing = mysqli_fetch_assoc($res_processing)){
            ?>
                <tr>
                <td><?php echo $row_processing['req_id'] ?></td>
                <td><?php echo $row_processing['name'] ?></td>
                <td><?php echo $row_processing['age'] ?></td>
                <td><?php echo $row_processing['gender'] ?></td>
                <td><?php echo $row_processing['mobile'] ?></td>
                <td><?php echo $row_processing['email'] ?></td>
                <td><?php echo $row_processing['bloodgroup'] ?></td>
                <td><?php echo $row_processing['requireddate'] ?></td>
                <td><?php echo $row_processing['details'] ?></td>
                <td><?php echo $row_processing['Status'] ?></td>
                <form method="POST"> 
                <td><button type="submit"  name="submit_accepted" value="<?php echo $row_processing['req_id'] ?>" class="btn btn-success btn-sm">Accepted</button></td>
                </form>
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
}
else{
    ?>

    <h3 class="alert alert-warning">No Blood Request Processing Found</h3>

 <?php   
}
?>
</div>
</div>

<div class="jumbotron ">
<div class="container">
<h1 class="display-4 ml-10">Accepted Requests</h1>

<?php if( $blood_request_accepted > 0){ ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Request Id</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Blood Group Requested</th>
            <th scope="col">Request Date</th>
            <th scope="col">Detail</th>
            <th scope="col">Status</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php 
        while($row_accepted = mysqli_fetch_assoc($res_accepted)){
            ?>
                <tr>
                <td><?php echo $row_accepted['req_id'] ?></td>
                <td><?php echo $row_accepted['name'] ?></td>
                <td><?php echo $row_accepted['age'] ?></td>
                <td><?php echo $row_accepted['gender'] ?></td>
                <td><?php echo $row_accepted['mobile'] ?></td>
                <td><?php echo $row_accepted['email'] ?></td>
                <td><?php echo $row_accepted['bloodgroup'] ?></td>
                <td><?php echo $row_accepted['requireddate'] ?></td>
                <td><?php echo $row_accepted['details'] ?></td>
                <td><?php echo $row_accepted['Status'] ?></td>
               
                </tr>
            <?php
        }
        ?>
    </tbody>
</table>



<?php
}
else{
    ?>

    <h3 class="alert alert-warning"> No Blood Request Accepted Found</h3>

 <?php   
}
?>
</div>
</div>



</div>

<?php
include('emp_footer.php');
?>