<?php
include('emp_header.php');
$sql = "SELECT * FROM donation";
$res = mysqli_query($con,$sql);
$res_count = mysqli_num_rows($res);
?>

<div class="container">
<br>
    <?php if($res_count > 0 ) { ?>
    <div class="card">
    <h1 class="alert alert-dark">Our Donars' Profile</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Camp</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                while($row = mysqli_fetch_assoc($res)) {
                    ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['bloodgroup'] ?></td>
                    <td><?php echo $row['camp'] ?></td>
                </tr>
                <?php
                 $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <?php
    }
    else { ?>
    <h3 class="alert alert-info">No Record Found</h3>
    <?php

    }
    ?>
</div>

<?php
include('emp_footer.php');
?>