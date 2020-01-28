<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><label style="margin-top: 10px; color:#524444 ">Menambah User</label></h3>
              <div class="card-tools" style="margin-right: 1px">
                <a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
                  <i class="fa fa-undo"></i>&nbsp; Back
                </a>
              </div>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="quickForm" action="" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputNama">Nama</label>
                <input type="text" name="fullname" class="form-control" id="exampleInputNama" placeholder="Masukkan Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="exampleInputNik">NIK</label>
                <input type="text" name="nik" class="form-control" id="exampleInputNik" placeholder="Masukan NIK dengan Angka"onkeypress="return hanyaAngka(event)">
              </div>
              <div class="form-group ">
                <label for="exampleInputUsername">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Masukkan Username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputpassconf">Konfirmasi Password</label>
                <input type="password" name="passconf" class="form-control" id="exampleInputpassconf" 
                placeholder="Konfirmasi Password">
              </div>
              <div class="form-group ">
                <label>Level *</label>
                <select name="level" class="form-control">
                  <option value="">- Pilih -</option>
                  <option value="1" <?=set_value('level') ==1 ? "selected" : null?>>Admin</option>
                  <option value="2" <?=set_value('level') ==2 ? "selected" : null?>>Pegawai</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane">&nbsp; Simpan</i></button>
              <button type="reset" class="btn btn-danger btn-flat"><i class="fas fa-edit">&nbsp; Reset</i></button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">
      <!-- Function Handler-->
      <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
     
            return false;
          return true;
        }
      </script>

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

<!-- /.content -->