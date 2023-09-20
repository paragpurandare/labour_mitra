<?php
session_start();

if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NorthenMed | Dashboard</title>

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
        <img src="../img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
            <a href="#" class="d-block"><?php echo $_SESSION['username'] ; ?></a>
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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Website
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Us Slider</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Bookings</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index3.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact Report</p>
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


            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Business
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Card Details</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Medical User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index6.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Lab User</p>
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
                    Add Medical User Here
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form action="../php/lab_details_insert.php" enctype="multipart/form-data" method="post">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lab Name</label>
                            <input type="text" name="medical_nm" class="form-control" id="exampleInput1" placeholder="Enter Lab Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Owner Name</label>
                            <input type="text" name="owner_nm" class="form-control" id="exampleInput2" placeholder="Enter Medical Owner Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" name="ownerMobile" class="form-control" id="exampleInput3" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Id</label>
                            <input type="email" name="email" class="form-control" id="exampleInput4" placeholder="Enter Email Id" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" name="user_nm" class="form-control" id="exampleInput5" placeholder="User Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Id</label>
                            <input type="text" name="user_id" class="form-control" id="exampleInput6" placeholder="User Id" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInput7" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInput8" placeholder="Address" required>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="lab_details_submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->


              <!-- TO DO List -->
              <div class="card">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Card Details</h3>


                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                          <thead>
                            <tr>
                              <th>Lab Name</th>
                              <th>Registration Date</th>
                              <th>Owner Name</th>
                              <th>Phone Number</th>
                              <th>Email Id</th>
                              <th>User Name</th>
                              <th>User Id</th>
                              <th>Password</th>
                              <th>Address</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          <?php

                              include '../dbcon.php';

                              $selectquery = " select * from lab_users ";

                              $query = mysqli_query($con,$selectquery);

                              while ($res = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                  <td><?php echo $res['lab_name']; ?></td>
                                  <td><?php echo $res['date']; ?></td>
                                  <td><?php echo $res['owner_name']; ?></td>
                                  <td><a href="tel:<?php echo $res['phone']; ?>"><?php echo $res['phone']; ?></a></td>
                                  <td><a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?></a></td>
                                  <td><?php echo $res['user_name']; ?></td>
                                  <td><?php echo $res['user_id']; ?></td>
                                  <td><?php echo $res['password']; ?></td>
                                  <td><?php echo $res['address']; ?></td>
                                  <td><a href="UpdateLab.php?id=<?php echo $res['id']; ?>"  title="delete"><i class="fa fa-edit"></i></a></td>
                                  <td><a href="../deletePhp/lab_details_delete.php?id=<?php echo $res['id']; ?>"  title="delete"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php
                              }
                            ?>

                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
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
      <strong>Developed By <a href="tel:9096553454">Pranav Sangave</a></strong>
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