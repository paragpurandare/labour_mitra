<?php
session_start();

if(!isset($_SESSION['username_card'])){
  header('Location: login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

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
                  <a href="empLogout.php" class="nav-link">
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
                    <form action="../php/card_details_insert.php" enctype="multipart/form-data" method="post">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Card Number</label>
                            <input type="text" name="cardNumber" onclick="getCardStart()" class="form-control" id="exampleInput1" placeholder="Enter Card Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Card Holder</label>
                            <input type="text" name="ownerText" class="form-control" id="exampleInput2" placeholder="Card Holder Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile Number</label>
                            <input type="text" name="ownerMobile" class="form-control" id="exampleInput3" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mother Name</label>
                            <input type="text" name="motherName" class="form-control" id="exampleInput4" placeholder="Mother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Father Name</label>
                            <input type="text" name="fatherName" class="form-control" id="exampleInput5" placeholder="Father Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Wife Name</label>
                            <input type="text" name="wifeName" class="form-control" id="exampleInput6" placeholder="Wife Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brother Name</label>
                            <input type="text" name="brotherName" class="form-control" id="exampleInput7" placeholder="Brother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sister Name</label>
                            <input type="text" name="sisterName" class="form-control" id="exampleInpu87" placeholder="Sister Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Grand Mother Name</label>
                            <input type="text" name="grandMother" class="form-control" id="exampleInput9" placeholder="Grand Mother Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Grand Father Name</label>
                            <input type="text" name="grandFather" class="form-control" id="exampleInput10" placeholder="Grand Father Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Children</label>
                            <input type="text" name="children" class="form-control" id="exampleInput11" placeholder="Children Name">
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="card_details_submit" class="btn btn-primary">Submit</button>
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
                              <th>Card Number</th>
                              <th>Card Holder</th>
                              <th>Validity</th>
                              <th>Mobile No.</th>
                              <th>Mother</th>
                              <th>Father</th>
                              <th>Wife</th>
                              <th>Brother</th>
                              <th>Sister</th>
                              <th>Grand Mother</th>
                              <th>Grand Father</th>
                              <th>Children</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                          <?php

                              include '../dbcon.php';

                              $selectquery = " select * from card_details ";

                              $query = mysqli_query($con,$selectquery);

                              while ($res = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                  <td><?php echo $res['card_number']; ?></td>
                                  <td><?php echo $res['owner']; ?></td>
                                  <td><?php echo $res['valid_till']; ?></td>
                                  <td><a href="tel:<?php echo $res['phone']; ?>"><?php echo $res['phone']; ?></a></td>
                                  <td><?php echo $res['mother']; ?></td>
                                  <td><?php echo $res['father']; ?></td>
                                  <td><?php echo $res['wife']; ?></td>
                                  <td><?php echo $res['brother']; ?></td>
                                  <td><?php echo $res['sister']; ?></td>
                                  <td><?php echo $res['grandMother']; ?></td>
                                  <td><?php echo $res['grandFather']; ?></td>
                                  <td><?php echo $res['child']; ?></td>
                                  <td><a href="UpdateCard.php?id=<?php echo $res['id']; ?>"  title="Update"><i class="fa fa-edit"></i></a></td>
                                  <td><a href="../deletePhp/card_details_delete.php?id=<?php echo $res['id']; ?>"  title="Delete"><i class="fa fa-trash"></i></a></td>
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