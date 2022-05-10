<?php 

session_start();
 
if (!isset($_SESSION['nik'])) { ?>
    <script>
        alert('Maaf Anda Harus Login Terlebih Dahulu!')
        window.location.assign('index.php');
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Peduli Diri</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
   <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="images/download.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Peduli Diri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/user.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php 
          echo "<h5><font color='#fff'>" . $_SESSION['nik'] ."</font></h5>"; 
          ?>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-item">
            <a href="?page=overview" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="?page=tulis_catatan" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                Tulis Catatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=riwayat_perjalanan" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Riwayat Perjalanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=hasil_pemeriksaan" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Hasil Pemeriksaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- <h2 class="my-3 mx-3">Selamat datang di aplikasi Peduli Diri</h2> -->

 <?php 

if (!empty(@$_GET['page'])) {
    switch (@$_GET['page']) {
        case 'tulis_catatan':
           include'tulis_catatan.php';
            break;
        case 'tambah_pemeriksaan':
           include'tambah_pemeriksaan.php';
            break;
        case 'riwayat_perjalanan':
            include'riwayat_perjalanan.php';
            break;
        case 'edit_catatan':
            include'edit_catatan.php';
            break;
        case 'edit_pemeriksaan':
            include'edit_pemeriksaan.php';
            break;
        case 'hasil_pemeriksaan':
            include 'hasil_pemeriksaan.php';
            break;
        default:
           echo "<h3>Halaman Tidak Ditemukan</h3>";
            break;
    }
}

  ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Peduli Diri</b>
    </div>
    <strong>Copyright &copy; <?php echo date ("Y"); ?><a href="awisnu545@gmail.com"> Peduli Diri </a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
</body>
</html>
