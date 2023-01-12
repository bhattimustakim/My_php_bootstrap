<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css" />
    <?php include 'conn.php'; ?>
    <title>Display Data</title>
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
                            <th>Apply for</th>
                            <th colspan="2">Option</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `registration` ";
                        $que = mysqli_query($conn, $sql);
                        $num = mysqli_num_rows($que);
                        while ($res = mysqli_fetch_array($que)) {
                        ?>
                            <tr>
                                <td><?php echo $res['id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['mobile'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['qal'] ?></td>
                                <td><?php echo $res['refer'] ?></td>
                                <td><?php echo $res['job'] ?></td>
                                <td class="text-center"><a href="update.php?id= <?php echo $res['id'] ?>"><i class="fa fa-edit"></i></a></td>
                                <td class="text-center"><a href="delete.php?id= <?php echo $res['id'] ?>"><i class="fa fa-trash"></i></a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>

                    <a href="index.php" class="btn btn-primary">Add New Member</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>