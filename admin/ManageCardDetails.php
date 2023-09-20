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
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Visit Website</a>
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
    <a href="https://northenmed.com" class="brand-link">
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
                <a href="./AddCard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Card Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.php" class="nav-link active">
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
          <section class="col-lg-12 connectedSortable container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Your Card Details Here</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body overflow-auto">
                <table id="example1" class="table table-bordered table-striped ">
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
                          <th>WhatsApp</th>
                        </tr>
                      </thead>
                  <tbody>
                  
                  <?php

                          include '../dbcon.php';

                          $selectquery = " select * from card_details ";

                          $query = mysqli_query($con,$selectquery);

                          while ($res = mysqli_fetch_array($query)) {

                            ?>
                            <tr class="table-primary" id="<?php echo $res['id']; ?>">
                                  <td><?php echo $res['card_number']; ?></td>
                                  <td><?php echo $res['owner']; ?></td>
                                  <td><?php echo $res['valid_till']; ?></td>
                                  <form id="phoneForm" action="submit.php" method="POST">
                                  <td><a href="tel:<?php echo $res['id']; ?>"  title="delete" onclick="window.open('../php/update_phone_status.php?id=<?php echo $res['id']; ?>');"><?php echo $res['phone']; ?></p></a></td>
                                  </form>
                                  <td><?php echo $res['mother']; ?></td>
                                  <td><?php echo $res['father']; ?></td>
                                  <td><?php echo $res['wife']; ?></td>
                                  <td><?php echo $res['brother']; ?></td>
                                  <td><?php echo $res['sister']; ?></td>
                                  <td><?php echo $res['grandMother']; ?></td>
                                  <td><?php echo $res['grandFather']; ?></td>
                                  <td><?php echo $res['child']; ?></td>
                                  <td><a href="https://wa.me/+91<?php echo $res['phone']; ?>" target="0" title="delete"><i class="fab fa-whatsapp"></i><?php echo $res['phone']; ?></a></td>
                                </tr>
                            <?php
                            // Checking data is in past or not
                            $timezone = date_default_timezone_set('Asia/Kolkata');
                            $current_date = date('Y-m-d');
                            $startDate = strtotime(date('Y-m-d', strtotime($res['valid_till']) ) );

                            $d = $res['valid_till'];
                            $d_r = $current_date;
                            $resId = $res['id'];
                            $call_state = $res['call_status'];

                            if($d < $d_r && $call_state == 1)
                            {
                              echo "<script type='text/javascript'>
                                var tbId = document.getElementById('$resId');
                                tbId.classList.add('table-warning');
                              </script>";
                            }
                            else if($d < $d_r && $call_state == 0)
                            {
                              echo "<script type='text/javascript'>
                                var tbId = document.getElementById('$resId');
                                tbId.classList.add('table-danger');
                              </script>";
                            }
                            else{
                              echo "<script type='text/javascript'>
                                var tbId = document.getElementById('$resId');
                                tbId.classList.add('table-success');
                              </script>";
                            }
                          }
                       ?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>Card Number</th>
                        <th>Card Holder</th>
                        <th>Validity</th>
                        <th>Mobile No.</th>
                        <th>Mother</th>
                        <th>Father</th>
                        <th>Wife</th>
                        <th>Brother</th>
                        <th>Sister</th
                        <th>Grand Mother</th>
                        <th>Grand Father</th>
                        <th>Children</th>
                        <th>WhatsApp</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  var tbId = document.getElementById('tbId');

  function changeColRed(){
    tbId.classList.remove('table-primary');
    tbId.classList.add('table-danger');
  }
  function changeColGreen(){
    tbId.classList.remove('table-primary');
    tbId.classList.add('table-primary');
  }
  function myFunc(){
    document.getElementById("#phoneForm").submit();
  }

  
  
</script>
</body>
</html>
