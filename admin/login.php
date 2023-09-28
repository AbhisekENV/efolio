<?php
require('./include/db.php');
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin WHERE email='$email' && password='$password'";
  $run = mysqli_query($db,$query);
  $data = mysqli_fetch_array($run);
  if(count($data)>0){
    $_SESSION['isUserLoggedIn']=true;
    $_SESSION['emailId'] = $_POST['email'];
    echo "<script>window.location.href = 'index.php';</script>";
  }else{
    echo "<script>alert('Incorrect email id or password !')</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="./dist/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./dist/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./dist/img/favicon-16x16.png">
<link rel="manifest" href="./dist/img/site.webmanifest">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="card">
    <div class="card-body login-card-body">
    <div class="login-box">
  <div class="login-logo">
  <img src="./dist/img/logo.jpg" width="150" height="70" alt="">
  </div>
      <p class="login-box-msg">Admin Panel</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
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
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
