<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Manage User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Layout</a></li>
          <li class="breadcrumb-item active">Manage User</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  
 <div class="card">
  <div class="card-header">
    <h3 class="card-title"><label style="margin-top: 10px; color:#524444 ">Daftar User Karyawan</label></h3>
 	<div class="card-tools" style="margin-right: 1px">
		<a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
			<i class="fa fa-user-plus"></i>&nbsp; Create
		</a>
	</div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
  	<div class="table-responsive">
    <table class="table table-bordered">
      <thead>                  
        <tr>
          <th style="width: 10px">#</th>
          <th>Username</th>
          <th>Name</th>
          <th>NIK</th>
          <th>Level</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
      	<?php 
      	$no = 1;
      	foreach ($row->result() as $key => $data) { ?>
      	<tr>
          <td><?=$no++?></td>
          <td><?=$data->username?></td>
          <td><?=$data->name?></td>
          <td><?=$data->nik?></td>
          <td><?=$data->level == 1 ? "Admin" : "Pegawai" ?></td>
          <td width="160px">
            <form action="<?=site_url('user/del')?>" method="post">
              <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs">
                <i class="fas fa-edit"></i>&nbsp; Update
              </a>
              
                <input type="hidden" name="user_id" value="<?=$data->user_id ?>">
              <button onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
                <i class="fas fa-trash-alt"></i>&nbsp; Delete
              </button>
            </form>

          </td>
        </tr>
      	<?php } ?>
        
      </tbody>
    </table>
    </div>
  </div>
</div>
</section>
<!-- /.content -->