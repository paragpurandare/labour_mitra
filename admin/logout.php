<?php
session_start();

// session_destroy();
unset($_SESSION['username']);  
unset($_SESSION['login']);

// header('location:98327454387.php');
?>
<script type="text/javascript">
  location.replace("login.php")
</script>
<?php
?>
