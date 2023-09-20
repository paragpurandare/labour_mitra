<?php
session_start();

  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  }

?>

<?php
   include '../dbcon.php';

   

   if (isset($_POST['updae_card_details_submit'])) {
     //fetching uploaded files name
     $card_number = $_POST['cardNumber'];
     $owner_name = $_POST['ownerText'];
     $owner_phone = $_POST['ownerMobile'];
     $mother_name = $_POST['motherName'];
     $father_name = $_POST['fatherName'];
     $wife_name = $_POST['wifeName'];
     $brother_name = $_POST['brotherName'];
     $sister_name = $_POST['sisterName'];
     $grandMother = $_POST['grandMother'];
     $grandFather = $_POST['grandFather'];
     $child_name = $_POST['children'];

     // Fetching Today's Date
     $timezone = date_default_timezone_set('Asia/Kolkata');
     $date = date('Y-m-d');
     $time = date('H:i:s');
     
     $valid_till = date('Y-m-d', strtotime($date. ' + 2 year'));
     $valid_till = date('Y-m-d', strtotime($valid_till. ' + 6 month'));

     //update query
     $id = $_GET['id'];

    $updateQuery = "UPDATE `card_details` SET 
    `card_number`='$card_number',`valid_from`='$date',`valid_till`='$valid_till',
    `owner`='$owner_name',`phone`='$owner_phone',`mother`='$mother_name',`father`='$father_name',`wife`='$wife_name',
    `brother`='$brother_name',`sister`='$sister_name',`grandMother`='$grandMother',`grandFather`='$grandFather',`child`='$child_name' 
    WHERE id='$id'" ;


     //firing the $query
     $res = mysqli_query($con,$updateQuery);

     if(!$res){
       ?>
       <script type="text/javascript">
         alert('Data inserted not Successful !');
         echo "<script> window.location.href = '../admin/index4.php'; </script>";
       </script>
       <?php

     }
     else {
       echo "<script> window.location.href = '../admin/index4.php'; </script>";
     }
   }

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NorthenMed | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="https://northenmed.com/" class="nav-link" target="0">Visit Website</a>
        </li>
      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="https://northenmed.com" class="brand-link" target="0">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">NorthenMed</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['username_card'] ; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Card Details</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./ManageCardDetails.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Card Details</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>


            <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">

              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Choose File To Upload
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                <?php

                  include '../dbcon.php';

                  $id = $_GET['id'];

                  $selectquery = " select * from card_details  WHERE id='$id' ";

                  $query = mysqli_query($con,$selectquery);

                  while ($res = mysqli_fetch_array($query)) {
                    ?>

                    <form  method="post">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Card Number</label>
                            <input type="text" value="<?php echo $res['card_number']; ?>" name="cardNumber" class="form-control" id="exampleInput1" placeholder="Enter Card Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Card Holder</label>
                            <input type="text" value="<?php echo $res['owner']; ?>" name="ownerText" class="form-control" id="exampleInput2" placeholder="Card Holder Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" value="<?php echo $res['phone']; ?>" name="ownerMobile" class="form-control" id="exampleInput3" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mother Name</label>
                            <input type="text" value="<?php echo $res['mother']; ?>" name="motherName" class="form-control" id="exampleInput4" placeholder="Mother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Father Name</label>
                            <input type="text" value="<?php echo $res['father']; ?>" name="fatherName" class="form-control" id="exampleInput5" placeholder="Father Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Wife Name</label>
                            <input type="text" value="<?php echo $res['wife']; ?>" name="wifeName" class="form-control" id="exampleInput6" placeholder="Wife Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brother Name</label>
                            <input type="text" value="<?php echo $res['brother']; ?>" name="brotherName" class="form-control" id="exampleInput7" placeholder="Brother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sister Name</label>
                            <input type="text" value="<?php echo $res['sister']; ?>" name="sisterName" class="form-control" id="exampleInput8" placeholder="Sister Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Grand Mother Name</label>
                            <input type="text" value="<?php echo $res['grandMother']; ?>" name="grandMother" class="form-control" id="exampleInput9" placeholder="Grand Mother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Grand Father Name</label>
                            <input type="text" value="<?php echo $res['grandFather']; ?>" name="grandFather" class="form-control" id="exampleInput10" placeholder="Grand Father Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Children</label>
                            <input type="text" value="<?php echo $res['child']; ?>" name="children" class="form-control" id="exampleInput11" placeholder="Children Name">
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="updae_card_details_submit" class="btn btn-primary">Update Card</button>
                        </div>
                    </form>
                    <?php
                        }
                      ?>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->


              
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Sang</b>Ways
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Page specific script -->
    <script>
    $(function () {
     bsCustomFileInput.init();
    });

    function getCardStart(){
        cardText = document.getElementById('exampleInput1');
        cardText.value = "VR1232";
        cardText.focus();
      }
    </script>
    
</body>

</html>