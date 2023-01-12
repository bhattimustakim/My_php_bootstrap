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
          <h1 class="heading1 text-center">Job Registration Form</h1>
          <form action="" method="POST">
            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Enter Your Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Your Mobile No</label>
                  <input type="text" class="form-control" name="mno">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Your Email Id</label>
                  <input type="text" class="form-control" name="email">
                </div>
              </div>
              <div class="col-6">
                <div class="mb-3">
                  <label class="form-label">Enter Your Qualification</label>
                  <input type="text" class="form-control" name="qal">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Reference</label>
                  <input type="text" class="form-control" name="refer">
                </div>
                <div class="mb-3">
                  <label class="form-label">Which Post Apply</label>
                  <input type="text" class="form-control" name="job">
                </div>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button><br /> <a href="display.php">Check List of Data</a>
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
    $mno = $_POST['mno'];
    $email = $_POST['email'];
    $qal = $_POST['qal'];
    $refer = $_POST['refer'];
    $job = $_POST['job'];

    //Insert Query
    // $sql = " INSERT INTO registration ('name', 'mobile', 'email', 'qal', 'refer','job') VALUES ($name, $mno, $email, $qal, $refer, $job)";\

    $sql = " INSERT INTO registration (name,mobile,email,qal,refer,job) VALUES ('$name','$mno','$email','$qal','$refer','$job') ";

    $res = mysqli_query($conn, $sql);

    if ($res) {
      header("Location: display.php");
    } else {
      echo 'data not inserted';
    }
  }
  ?>

</body>

</html>