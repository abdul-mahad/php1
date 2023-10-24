<?php
include "config/connection.php";

$select = "select * from roles where roles.Role_id>1";

$run = mysqli_query($conn, $select);


if (isset($_POST["register"])) {
  $Name = $_POST["Name"];
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $Role = $_POST["Role"];

  $insert = "INSERT INTO `users`(`User_name`, `User_Emial`, `User_Password`, `role_id`) VALUES ('$Name', '$Email', '$Password', $Role)";

  $run = mysqli_query($conn, $insert);

  if ($run) {
    header("location:index.php");
  } else {
    echo "Error";
  }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./Dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./Dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./Dashboard/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="Dashbaord/index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="Name" class="form-control" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="Email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="Password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">


            <select class="form-control" name="Role">
              <?php
              while ($row = mysqli_fetch_assoc($run)) { ?>


                <option value="<?php echo $row["Role_id"] ?>"><?php echo $row["Role_Name"] ?></option>

              <?php
              } ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>



        <a href="index.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="Dashbaord/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Dashbaord/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Dashbaord/dist/js/adminlte.min.js"></script>
</body>

</html>