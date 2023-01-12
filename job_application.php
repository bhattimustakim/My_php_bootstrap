<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <link rel="stylesheet" href="css/style.min.css">
    <?php include 'conn.php'; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-8 pt-5">
                    <table class="table table-hover table-bordered table-light">
                        <tr class="text-center">
                            <th>id</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Email ID</th>
                            <th>Qualification</th>
                            <th>Reference</th>
                            <th colspan="2">Option</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `jobapplication` ";
                        $que = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($que);
                        while ($res = mysqli_fetch_array($que)) {
                        ?>
                            <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['mobileno'] ?></td>
                                <td><?php echo $res['qualification'] ?></td>
                                <td><?php echo $res['designation'] ?></td>
                                <td><?php echo $res['reference'] ?></td>
                                <td class="text-center"><a href="update.php?id= <?php echo $res['id'] ?>"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="delete.php?id= <?php echo $res['id'] ?>"><i class="fa fa-trash"></i></a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New Member
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Job Registration Form
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <label class="col-form-label">Enter Your Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <label class="col-form-label">Enter Your Email Id
                                        </label>
                                        <input type="text" class="form-control" name="email">
                                        <label class="col-form-label">Enter Your Mobile No
                                        </label>
                                        <input type="text" class="form-control" name="mno">
                                        <label class="col-form-label">Enter Your Qualification
                                        </label>
                                        <input type="text" class="form-control" name="qal">
                                        <label class="col-form-label">Which Post Apply
                                        </label>
                                        <input type="text" class="form-control" name="job">
                                        <label class="col-form-label">Enter Reference
                                        </label>
                                        <input type="text" class="form-control" name="refer">
                                        <input type="submit" class="mt-4 btn btn-primary" name="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $qal = $_POST['qal'];
    $designation = $_POST['job'];
    $reference = $_POST['refer'];

    $sql = " INSERT INTO jobapplication (name, email, mobileno, qualification, designation, reference) VALUES ('$name','$email','$mno','$qal','$designation','$reference') ";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo 'data inserted';
    } else {
        echo 'data not inserted';
    }
}
?>

</html>