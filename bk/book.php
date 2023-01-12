<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Document 2</title>
    <link rel="stylesheet" href="css/style.min.css" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    <h1 class="heading1 text-center">Assignment Book Register</h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Enter Your Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Enter Your Class</label>
                                    <input type="text" class="form-control" name="std">
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Enter Your Semester</label>
                                    <input type="text" class="form-control" name="sem">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Enter Your Subject</label>
                                    <input type="text" class="form-control" name="sub">
                                </div>

                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'conn.php';


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $std = $_POST['std'];
        $sem = $_POST['sem'];
        $sub = $_POST['sub'];

        $sql = " INSERT INTO book (name, class, sem, sub) VALUES ('$name','$std','$sem','$sub') ";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo 'data inserted';
        } else {
            echo 'data not inserted';
        }
    }
    ?>

</body>

</html>