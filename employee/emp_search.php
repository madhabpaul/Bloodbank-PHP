<?php
include('emp_header.php');
$res_count = 0;
$bggroup = "";
$no_result = False;

if (isset($_POST['donar_search'])) {
    $bggroup = $_POST['blood_group'];
    $sql = "SELECT * FROM registration WHERE blood_group = '" . $bggroup . "'";
    $res = mysqli_query($con, $sql);
    $res_count = mysqli_num_rows($res);

    if($res_count == 0){
        $no_result = True;
    }else{
        $no_result = False;
    }
}
?>

<div class="container" style="margin-top: 50px;">
<div class="card">
    <form method="POST" style="padding-left: 100px; padding-right: 100px; ">
        <div class="text-center" style="margin-top: 20px; margin-bottom: 10px;">
            <strong>
                <h1>SEARCH FOR BLOOD GROUP</h1>
            </strong>
        </div>
        <div class="input-group mb-3" style="padding-top: 10px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Select Blood Group</span>
            </div>
            <select class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="blood_group">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
            </select>
        </div>
        <div class="text-center" style="padding-top: 30px;">
            <button type="submit" class="btn btn-danger " name="donar_search" style="margin: 10px; width: 30%;">SEARCH</button>
        </div>
        </div>
        <br>
    </form>

    <div>
        <?php
        if ($bggroup == "") { ?>
            <h3 class="alert alert-info">Please Select Blood Group</h3>
        <?php
        } else {
        ?>
            <h3 class="alert alert-info">RESULTS FOR : <?php echo $bggroup ?> BLOODGROUP</h3>
        <?php
        }
        ?>
    </div>
    <?php
    if ($res_count > 0) {
    ?>
        <div class="card">
            <table class="table">
                <thead>
                    <tr class="bg-dark" style="color: white; font-weight: bold">
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Age'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['blood_group'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <?php
        if($no_result == True){ ?>

        <h3 class="alert alert-danger">OOPs!! No Result Found</h3>
            <?php
        }
    ?>
</div>
<br>
<?php
include('emp_footer.php');
?>