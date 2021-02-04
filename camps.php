<?php
include('header.php');
$sql="SELECT * FROM camps";
$res = mysqli_query($con,$sql);
$camp_res=mysqli_num_rows($res);
?>

    <?php 
    if($camp_res > 0) {
    ?>                          
    <div class="container">
    <br>
        <div class="card bg-dark">
            <div class="card-text " style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; color:white">
                <span>Camps Organized By Us<span>
            </div>
        </div>
        <div class="row">
        <?php while( $row = mysqli_fetch_assoc($res)) {  ?>
        <div class="col-6">
        <div class="card mt-2">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['camp_title'] ?></h5>
            <h6 class="card-subtitle mb-2 ">Organized by: <?php echo $row['organized_by'] ?></h6>
            <p class="card-text">Location: <?php echo $row['city'],",",$row['state'] ?></p>
            <p class="card-text">From: <?php echo $row['from_date'] ?></p>
            <p class="card-text">To: <?php echo $row['to_date'] ?></p> 
        </div>
    </div>
    </div>
    
        <?php
        }
    }
    else
    {
    ?>
     <h3 class="alert alert-warning">No Result Found</h3>
    <?php
    }
    ?>
</div>
</div>
<br>
<?php
include('footer.php');
?>
