
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Fixed Navbar Layout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

      <ul class="navbar-nav ml-auto">
        <a href="<?=site_url('auth/logout')?>" class="btn btn-danger" style="margin-right: 5px">Sign Out</a>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #7d1111; ">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>assets/index3.html" class="brand-link elevation-4" style="background-color: #7d1111; border-bottom: 1px solid #ffffff">
      <img src="<?=base_url()?>assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8;  ">
      <span class="brand-text font-weight-light" >AdminLTE 3</span>
    </a>

    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: 1px solid #ffffff; " >
        <div class="image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?=$this->fungsi->user_login()->name?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

<!-- ****************************************Dashboard*********************************-->
          <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="<?=base_url()?>assets/index.html" class="nav-link" style="height: 100px;" >
              <i class="fa fa-laptop fa-2x" style="margin-top: 15px;"></i><br>
              <span class="brand-text font-weight-light">Dashboard</span>
            </a>
          </li>     
<!-- ****************************************End Dashboard*********************************-->

<!-- ****************************************Pelanggan*********************************-->          
          <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="../gallery.html" class="nav-link" style="height: 100px" >
              <i class="fa fa-users fa-2x" style="margin-top: 15px"></i><br>
              <span class="brand-text font-weight-light">Data Pelanggan</span>
            </a>
          </li>   
<!-- ****************************************End Pelanggan*********************************-->          

<!-- ****************************************Keluhan*********************************-->   
          <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="https://adminlte.io/docs/3.0" class="nav-link" style="height: 100px"  >
              <i class="fa fa-child fa-2x" style="margin-top: 15px"></i><br>
              <span class="brand-text font-weight-light">Data Keluhan</span>
            </a>
          </li>
<!-- ****************************************End Keluhan*********************************-->   

<!-- ****************************************Antrian*********************************-->   
          <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="https://adminlte.io/docs/3.0" class="nav-link" style="height: 100px"  >
              <i class="fa fa-server fa-2x" style="margin-top: 15px"></i><br>
              <span class="brand-text font-weight-light">List Antrian</span>
            </a>
          </li>
<!-- ****************************************End Antrian*********************************-->   

<!-- ****************************************Nomor*********************************-->   
          <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="https://adminlte.io/docs/3.0" class="nav-link" style="height: 100px"  >
              <i class="fa fa-hourglass-start fa-2x" style="margin-top: 15px"></i><br>
              <span class="brand-text font-weight-light">Nomor Antrian</span>
            </a>
          </li>
<!-- ****************************************End Nomor*********************************-->   


<?php if($this->session->userdata('level') == 1){?>
<!-- ****************************************Users*********************************-->  
         <li class="nav-item" style="text-align: center; margin-left: -35px">
            <a href="<?=site_url('user')?>" class="nav-link" style="height: 100px"  >
              <i class="fa fa-user fa-2x" style="margin-top: 15px"></i><br>
              <span class="brand-text font-weight-light">Manage Users</span>
            </a>
          </li> 
<!-- ****************************************End Users*********************************-->   
 
<?php } ?>
 <li style="height: 125px">
 </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php echo $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<!-- jquery-validation -->
<script src="<?=base_url()?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      fullname: {
        required: true,
      },
      nik: {
        required: true,
        minlength: 5,
        maxlength:10,
      },
      username: {
        required: true,
        minlength: 5,
      },
      passconf: {
        required: true,
        equalTo : '[name="password"]'
      },
      level: {
        required: true,
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Password masih kosong, silahkan isi",
        minlength: "Password Anda setidaknya harus sepanjang 5 karakter"
      },
      fullname:{
        required: "Nama masih kosong, silahkan isi",
      },
      nik:{
        required: "NIK masih kosong, silahkan isi",
        minlength: "NIK Anda setidaknya harus sepanjang 5 karakter",
        maxlength: "NIK Anda setidaknya harus kurang dari 10 karakter"
      },
      username:{
        required: "Username masih kosong, silahkan isi",
        minlength: "Username Anda setidaknya harus sepanjang 5 karakter",
        remote: "ONOK",
      },
      passconf:{
        required: "Konfirmasi Password masih kosong, silahkan isi",
        equalTo: "Silakan masukkan lagi Password yang sama",
      },
      level:{
        required: "Silahkan memilih salah satu level",
      },

      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
