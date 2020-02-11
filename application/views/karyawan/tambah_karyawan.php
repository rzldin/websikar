<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><?= $title; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('karyawan/tambah_aksi')?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" required>
                  </div>
                  <div class="form-group">
                    <label for="alamt">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" required>
                  </div>
                  <div class="form-group">
                    <label for="telpon">No. Telpon</label>
                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="No Telepon" required>
                  </div>
                  <div class="form-group">
                    <label>Departemen</label>
                    <select class="form-control select2" style="width: 100%;" name="kd_depart" id="kd_depart">
                    <option selected="selected">-Pilih Departemen-</option>
                    <?php foreach ($departemen as $dept) {?>
                    	<option value="<?= $dept->kd_depart; ?>"><?= $dept->nama_depart; ?></option>
                    <?php } ?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Divisi</label>
                    <select class="form-control select2" style="width: 100%;" name="kd_divisi" id="kd_divisi">
                    <option selected="selected">-Pilih Divisi-</option>
                    <?php foreach ($divisi as $div) { ?>
                    	<option value="<?= $div->kd_divisi; ?>"><?= $div->nama_divisi; ?></option>
                    <?php } ?>	
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2" style="width: 100%;" name="status" id="status">
                    	<option selected="selected">-Pilih Status-</option>
                    	<option value="1">MASIH AKTIF</option>
                    	<option value="0">TIDAK AKTIF</option>
                  	</select>
                  </div>
                  <div class="form-group">
                    <label>Jenjang Terakhir</label>
                    <select class="form-control select2" style="width: 100%;" name="kd_tamat" id="kd_tamat">
                    	<option selected="selected">-Pilih Jenjang-</option>
                    	<?php foreach ($lulusan as $lulus) { ?>
                    		<option value="<?= $lulus->kd_tamat; ?>"><?= $lulus->tamatan; ?></option>
                    	<?php } ?>	
                  	</select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Masukkan Foto Profil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Unggah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>