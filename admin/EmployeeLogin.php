<?php
session_start();

if(!isset($_SESSION['username_card'])){
  header('Location: login.php');
}
 ?>
<?php
  // session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<?php
      include '../dbcon.php';

      if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password = $_POST['pass'];

        $user_search = " select * from add_card_emp_login where userid = '$user' ";
        $query = mysqli_query($con,$user_search);



        $user_count =   mysqli_num_rows($query);

        if($user_count){
            $user_pass = mysqli_fetch_assoc($query);
            $db_pass = $user_pass['password'];

            if($password==$db_pass){
              $timezone = date_default_timezone_set('Asia/Kolkata');
              $date = date('Y-m-d');
              $time = date('H:i:s');
              $admin_enter = " INSERT INTO `admin_card_entry`(`login_id`, `admin_name`, `login_date`, `login_time`) VALUES ('$user',' $user_pass[name](Employee)','$date','$time') " ;
              mysqli_query($con,$admin_enter);


              //Mail Mechanism
              $admin_name = $user_pass['name'];
              $login_id = $user;
              $date_msg = $date;
              $time_msg = $time;

              $email_from = 'service@northenmed.com';

              $email_subject = $admin_name."Employee Just Logged In in Add Card Panel" ;
              $email_body = "Name: $admin_name.\n".
                            "Login Id. $login_id.\n".
                            "Login Date: $date_msg.\n".
                            "Login Time: $time_msg.\n";

             $to_email_1 = "sangavepranav2007@gmail.com";
             $to_email_2 = "northenmed99@gmail.com";
             $headers = "From: $email_from \r\n";
             mail($to_email_1,$email_subject,$email_body,$headers);
             mail($to_email_2,$email_subject,$email_body,$headers);
              ?>
                <script>
                  location.replace("AddCard.php")
                </script>
              <?php
            }else {
              ?>
                <script>
                  alert('Password Incorrect !');
                </script>
              <?php
            }
        }else{
          ?>
            <script>
              alert('Incorrect Userid !');
            </script>
          <?php
        }
      }
      
     ?>
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Northen</b>Med</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Employee Login</p>

      <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="user" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt mr-2"></i> Login </button>
          </div>
          <div class="col-6">
            <a href="empLogout.php" class="btn btn-danger btn-block">Logout</a>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
