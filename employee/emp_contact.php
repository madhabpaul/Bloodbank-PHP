<?php
include('emp_header.php');

# Fetch All Status Pending From Contact
$sql_pending = "SELECT * FROM contact WHERE status='Pending'";
$res_pending = mysqli_query($con,$sql_pending);
$res_pending_count = mysqli_num_rows($res_pending);

# Fetch All Status Pending From Contact
$sql_success = "SELECT * FROM contact WHERE status='Contact Successful'";
$res_success = mysqli_query($con,$sql_success);
$res_success_count = mysqli_num_rows($res_success);


# Status Change Request
if(isset($_POST['status_change'])){
    $contact_id = $_POST['contact_id'];
    $sql_status_chg = "UPDATE contact SET status = 'Contact Successful' WHERE contact_id='".$contact_id."'";
    $res_status_chg = mysqli_query($con,$sql_status_chg);
    if($res_status_chg == False){
        echo "<script>alert('Sorry! Something went wrong')</script>";
    } 
    else{
        redirect('emp_contact.php');
    }
}
?>
<br>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Pending Contact</h1>
        <?php  if($res_pending_count > 0) { ?>
        <table class="table">
            <thead>
                <th scope="col">Contact Id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Contact user</th>
            </thead>
            <tbody>
            <?php while($row_pending = mysqli_fetch_assoc($res_pending)) { ?>
                <tr>
                <td><?php echo $row_pending['contact_id'] ?></td>
                <td><?php echo $row_pending['name'] ?></td>
                <td><?php echo $row_pending['phone'] ?></td>
                <td><?php echo $row_pending['subject'] ?></td>
                <td><?php echo $row_pending['description'] ?></td>
                <td><?php echo $row_pending['status'] ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="contact_id" value="<?php echo $row_pending['contact_id'] ?>">
                        <button class="btn btn-sm btn-outline-primary" type="submit" name="status_change">Contact</button>
                    </form>
                </td>
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
            <h3 class="alert alert-info">No Record Found!</h3>
        <?php
        }
        ?>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Contact Successful</h1>
        <?php  if($res_success_count > 0) { ?>
        <table class="table">
            <thead>
                <th scope="col">Contact Id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </thead>
            <tbody>
            <?php while($row_success= mysqli_fetch_assoc($res_success)) { ?>
                <tr>
                <td><?php echo $row_success['contact_id'] ?></td>
                <td><?php echo $row_success['name'] ?></td>
                <td><?php echo $row_success['phone'] ?></td>
                <td><?php echo $row_success['subject'] ?></td>
                <td><?php echo $row_success['description'] ?></td>
                <td><?php echo $row_success['status'] ?></td>
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
            <h3 class="alert alert-info">No Record Found!</h3>
        <?php
        }
        ?>
    </div>
</div>
<?php
include('emp_footer.php');
?>