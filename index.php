<?php
session_start();
$conn=mysqli_connect("localhost","root","","aptech1");
// include "config/connection.php";
$select = "select * from roles where roles.Role_id";

$run = mysqli_query($conn, $select);


if(isset($_POST["login"])){
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $Role = $_POST["Role"];

  $select = "SELECT * from users INNER JOIN roles on users.role_id = roles.Role_id  WHERE User_Emial = '$Email' AND User_Password = '$Password' AND users.role_id = $Role";


  $run = mysqli_query($conn, $select);
// for Session work 
  $row= mysqli_fetch_assoc($run);

  if(is_array($row)){
    $_SESSION["id"] = $row["User_id"];
    $_SESSION["role"] = $row["Role_Name"];
    $_SESSION["username"] = $row["User_name"]; 
    $_SESSION["email"] = $row["User_Emial"];
  }

  if( isset($_SESSION["id"])){
    header("location:Dashboard/dashboard.php");
  }else {
    header("location:index.php");

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
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./Dashboard/index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  method="post">
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
              <?php $i = 1;
              while ($row = mysqli_fetch_assoc($run)) { ?>


                <option value="<?php echo $row["Role_id"] ?>"><?php echo $row["Role_Name"] ?></option>

              <?php $i++;
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
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button name="login" type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
              <a href="forgot-password.php" class="btn btn-success mt-3 col-12">Forgot password</a>
      <!-- /.social-auth-links -->

   
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./Dashboard/plugins/jquery/jquery.min.js"></>
<!-- Bootstrap 4 -->
<script src="./Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./Dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>
