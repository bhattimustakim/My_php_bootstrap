<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to Document 2</title>
  <link rel="stylesheet" href="css/style.min.css" />
</head>


<?php
include 'conn.php';

$id = $_GET['id'];
echo $id;

$show_query = "SELECT * FROM registration WHERE id = $id;";

$show_data = mysqli_query($conn, $show_query);

$arr_data = mysqli_fetch_array($show_data);
?>

<body>
  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-8">
          <h1 class="heading1 text-center">Update Job Registration Form</h1>
          <form action="" method="POST">
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Enter Your Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $arr_data['name']; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Your Mobile No</label>
                  <input type="text" class="form-control" name="mno" value="<?php echo $arr_data['mobile']; ?>">
                </div>
                <div class=" mb-3">
                  <label class="form-label">Enter Your Email Id</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $arr_data['email']; ?>">
                </div>
              </div>
              <div class=" col-6">
                <div class="mb-3">
                  <label class="form-label">Enter Your Qualification</label>
                  <input type="text" class="form-control" name="qal" value="<?php echo $arr_data['qal']; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Reference</label>
                  <input type="text" class="form-control" name="refer" value="<?php echo $arr_data['refer']; ?>">
                </div>
                <div class="mb-3">
                  <label class="form-label">Which Post Apply</label>
                  <input type="text" class="form-control" name="job" value="<?php echo $arr_data['job']; ?>">
                </div>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary" name="update">Update</button> <br />
                <a href="display.php">Check List of Data</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['update'])) {
    $id_updated = $_GET['id'];
    $name = $_POST['name'];
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $qal = $_POST['qal'];
    $refer = $_POST['refer'];
    $job = $_POST['job'];

    $sql = "UPDATE registration SET name ='$name', mobile ='$mno', email ='$email', qal='$qal', refer= '$refer', job= '$job'  WHERE  id = '$id_updated'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
      header("Location: display.php");
    } else {
      echo 'data not Updated';
    }
  }
  ?>


</body>


</html>