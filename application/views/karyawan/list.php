
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 info-box-content text-dark">
              <small class="badge badge-success"><i class="far fa-clock"></i>
                <?php
                  $date = Date("Y-m-d H:i:s", time()+60*60*6);
                  Echo "The time is $date <br>";
                ?>
              </small>
            </h5>
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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Karyawan</span>
                <span class="info-box-number">
                  <?= $total_karyawan; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <?php foreach ($jumlah_divisi as $key => $val){
              if ($key == 0) {
                $a =  $val;
              } elseif ($key == 1) {
                $b =  $val;
              } else {
                $c =  $val;

              } 
            ?>
          <?php } ?>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Karyawan INKA</span>
                <span class="info-box-number"><?= $a->jumlah; ?></span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Organik HCM</span>
                <span class="info-box-number"><?= $c->jumlah; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Karyawan Kontrak</span>
                <span class="info-box-number"><?= $b->jumlah; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <br>
        <div class="row">
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Departemen A</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="list" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Departemen B</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="departemenB" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <?php foreach ($jumlah_departemen as $key => $val){
              if ($key == 0) {
                $a =  $val;
              } elseif ($key == 1) {
                $b =  $val;
              } else {
                $c =  $val;

              } 
            ?>
          <?php } ?>
   <script>
        var ctx = document.getElementById("list").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'doughnut',
          data : {
        // label nama setiap Value
        labels:[
                  'Karyawan INKA',
                  'Organik HCM',
                  'Karyawan Kontrak'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           label: "Departemen A",
          
           data:[<?= $a->jumlah_divisi; ?>,1,1],

          backgroundColor:[
                 'rgb(220, 20, 60)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)'
                 ]
        }],
        }
        });

        var ctx = document.getElementById("departemenB").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'doughnut',
          data : {
        // label nama setiap Value
        labels:[
                  'Karyawan INKA',
                  'Organik HCM',
                  'Karyawan Kontrak'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[<?= $b->jumlah_divisi; ?>,1,1],

          backgroundColor:[
                 'rgb(220, 20, 60)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)'
                 ]
        }],
        }
        });


    </script>
