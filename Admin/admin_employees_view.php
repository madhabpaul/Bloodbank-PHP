<?php
include('admin_header.php');

$sql_emp = "SELECT * FROM employee";
$res_emp = mysqli_query($con,$sql_emp);
$res_emp_count = mysqli_num_rows($res_emp);

if(isset($_POST['submit_salary'])){
    $salary = $_POST['salary_amt'];
    $emp_id = $_POST['submit_salary'];

    $sql_emp_chg = "UPDATE employee SET salary='".$salary."' WHERE emp_id='".$emp_id."'";
    $res_emp_chg = mysqli_query($con,$sql_emp_chg);

    if($res_emp_chg == False){
        echo "<script>alert('Failed To Update')</script>";
    }
    else{
        redirect('admin_employees_view.php');
    }
}

?>
<br>
<div class="container">
    <div class="card ">
            <div class="card-text " style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; ">
                <span>Employees<span>
            </div>
    </div>
    <div class="jumbotron ">
    <div class="container">
        
        
        <?php if( $res_emp_count > 0){ ?>

            <table class="table">
                <thead>
                    <tr style="font-weight: bold;">
                        <th scope="col">Employee Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joining Date</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Change Salary</th>
                    </tr>
                </thead>
            <tbody>
            <?php 
            while($row_pending = mysqli_fetch_assoc($res_emp)){
                ?>
                    <tr>
                    <td><?php echo $row_pending['emp_id'] ?></td>
                    <td><?php echo $row_pending['name'] ?></td>
                    <td><?php echo $row_pending['age'] ?></td>
                    <td><?php echo $row_pending['gender'] ?></td>
                    <td><?php echo $row_pending['bg'] ?></td>
                    <td><?php echo $row_pending['phone'] ?></td>
                    <td><?php echo $row_pending['email'] ?></td>
                    <td><?php echo $row_pending['j_date'] ?></td>
                    <td><?php echo $row_pending['designation'] ?></td>
                    <td><?php echo $row_pending['salary'] ?></td>
                    <form method="POST"> 
                    <td>
                    <input type="number" name="salary_amt" class="form-control" placeholder="Enter Salary">
                    <button type="submit"  name="submit_salary" value="<?php echo $row_pending['emp_id'] ?>" class="btn btn-info btn-sm">Change Salary</button>
                    </td>
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

        <h3 class="alert alert-warning">No Employee Found</h3>

     <?php   
    }
    ?>
    </div>
</div>

<?php
include('admin_footer.php');
?>