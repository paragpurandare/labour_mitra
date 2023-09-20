<?php
session_start();
$user_name = $_SESSION['username'] ;
$user_id = $_SESSION['login'];

$timezone = date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$time = date('H:i:s');
  include '../dbcon.php';

  $selectquery = "select max(id) as max from `admin_entry` ";
  $query = mysqli_query($con,$selectquery);
  $res = mysqli_fetch_array($query);

  echo "max = ".$res['max'];
  $mx = $res['max'];

$admin_enter = "update admin_entry set logout_time = '$time' where id= $mx " ;
// $admin_enter = "INSERT INTO `admin_entry`(`logout_time`) VALUES('$time') where `id` =".$res['max'];
// echo "update admin_entry set logout_time = '$time' where id=$mx";
// echo "Updated Logout time at max id:".$res['max'];
mysqli_query($con,$admin_enter);

//Mail Mechanism
$admin_name = $user_name;
$login_id = $user_id;
$date_msg = $date;
$time_msg = $time;

$email_from = 'service@northenmed.com';

$email_subject =  $user_name. " Just Logged Out from Admin Panel" ;
$email_body = "Name: $user_name.\n".
              "Login Id. $user_id.\n".
              "Logout Date: $date_msg.\n".
              "Logout Time: $time_msg.\n";

$to_email_1 = "sangavepranav2007@gmail.com";
$to_email_2 = "northenmed99@gmail.com";
$headers = "From: $email_from \r\n";
mail($to_email_1,$email_subject,$email_body,$headers);
mail($to_email_2,$email_subject,$email_body,$headers);

// session_destroy();
unset($_SESSION['username_card']);  

// header('location:98327454387.php');
?>
<script type="text/javascript">
  location.replace("login.php")
</script>
<?php
?>
