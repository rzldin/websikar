<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"><?= $title; ?></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('welcome')?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
       <div class="card">
            <div class="card-header">
              <h2 class="card-title text-dark"><?= $title; ?></h2><br/>
              <p>
    				<a href="<?= base_url('karyawan/tambah_karyawan') ?>" title="Tambah Karyawan" class="btn btn-primary">
      				<i class="fa fa-plus"></i> Add
    				</a>
  			  </p>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" width="100%">
		                <thead>
		                <tr>
		                  <th width="2%">No</th>
		                  <th>Profile</th>
		                  <th>Nama Lengkap</th>
		                  <th>Departemen</th>
		                  <th>Jenis Karyawan</th>
		                  <th>Email</th>
		                  <th>Tanggal Lahir</th>
		                  <th>Aktif</th>
		                  <th width="13%">Action</th>
		                </tr>
		                </thead>
		                <tbody>
		                 <?php $i=1; 
		                	foreach ($data_karyawan as $dk) 
		                {?>
		                <tr>
		                  <td><?= $i; ?></td>
		                  <td><img src="<?= base_url('assets/admin/dist/img/avatar2.png')?>" width="60" class="img img-circle"></td>
		                  <td><?= $dk->nama_karyawan; ?></td>
		                  <td><?= $dk->nama_depart; ?></td>
		                  <td><?= $dk->nama_divisi; ?></td>
		                  <td><?= $dk->no_telp; ?></td>
		                  <td align="center"><?= $dk->tanggal_lahir; ?></td>
		                  <td><?php if($dk->status == 1){
		                  		echo "<span class='badge badge-success'>MASIH AKTIF</span>";
		                  	} else {
		                  		echo "<span class='badge badge-secondary'>TIDAK AKTIF</span>";
		                  	}
		                  	?></span></td>
		                  <td>
		                  	<a href="<?= base_url('karyawan/edit/' .$dk->id_karyawan) ?>" title="Edit" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>
		                  	<a href="<?= base_url('karyawan/delete/' .$dk->id_karyawan) ?>" title="Delete" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
		                  </td>
		                </tr>
		                <?php $i++; } ?>
		                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>


