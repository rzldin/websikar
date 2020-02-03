<style>
  h1,h2,p,a{
    font-family: sans-serif;
    font-weight: normal;
  }
 
  .jam-digital {
    overflow: hidden;
    width: 500px;
    margin: 20px auto;
    border: 0px solid black;
    border-radius: 10px;
  }
  .kotak{
    float: left;
    width: 50px;
    height: 50px;
    background-color: #EF6811;
    border-radius: 6px;
    border: 2px solid black;
  }
  .jam-digital p {
    color: #fff;
    font-size: 20px;
    text-align: center;
    margin-top: 10px;
    font-weight: bold;
  }
 
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!--  <h5 class="m-0 info-box-content text-dark">
              <small class="badge badge-success"><i class="far fa-clock"></i>
                <?php
                  // $date = Date("Y-m-d H:i:s", time()+60*60*6);
                  // Echo "The time is $date <br>";
                ?>
              </small>
            </h5><br> -->
            <!-- Jam Digital -->
            <div class="jam-digital">
              <div class="kotak">
                <p id="jam"></p>
              </div>
              <div class="kotak">
                <p id="menit"></p>
              </div>
              <div class="kotak">
                <p id="detik"></p>
              </div>
            </div>
          </div>
          <!-- /.col -->
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
                <h3 class="card-title">Karyawan INKA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="karyawanInka" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Organik HMS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="organikHms" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        <!-- /.row -->
      </div>
       <div class="row">
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">karyawan Kontrak</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="karyawanKontrak" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
      <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php foreach ($jumlah_lulusan as $key => $val){
              if ($key == 0) {
                $a =  $val;
              } elseif ($key == 1) {
                $b =  $val;
              } elseif ($key == 2) {
                $c = $val;
              } elseif ($key == 3) {
                $e = $val;
              } elseif ($key == 4) {
                $f = $val;
              } elseif ($key == 5) {
                $g = $val;
              } elseif ($key == 6) {
                $h = $val;
              } elseif ($key == 7) {
                $i = $val;
              } elseif ($key == 8) {
                $j = $val;
              } else {
                $d =  $val;

              } 
            ?>
          <?php } ?>
   <script>
        var ctx = document.getElementById("karyawanInka").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'SMA/SMK',
                  'Strata 1 (S1)',
                  'Strata 2 (S2)'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           label: "Departemen A",
          
           data:[<?= $c->jumlah_lulusan; ?>,<?= $a->jumlah_lulusan; ?>,<?= $b->jumlah_lulusan; ?>],

          backgroundColor:[
                 'rgb(255, 87, 51)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)'
                 ]
        }],
        }
        });

        var ctx = document.getElementById("organikHms").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'SMA/SMK',
                  'Strata 1 (S1)',
                  'Strata 2 (S2)'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[<?= $j->jumlah_lulusan; ?>,<?= $h->jumlah_lulusan; ?>,<?= $i->jumlah_lulusan; ?>],

          backgroundColor:[
                 'rgb(255, 87, 51)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)'
                 ]
        }],
        }
        });

        var ctx = document.getElementById("karyawanKontrak").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'SMA/SMK',
                  'Strata 1 (S1)',
                  'Strata 2 (S2)'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[<?= $g->jumlah_lulusan; ?>,<?= $e->jumlah_lulusan; ?>,<?= $f->jumlah_lulusan; ?>],

          backgroundColor:[
                 'rgb(255, 87, 51)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)'
                 ]
        }],
        }
        });

        window.setTimeout("waktu()", 1000);
 
        function waktu() {
          var waktu = new Date();
          setTimeout("waktu()", 1000);
          document.getElementById("jam").innerHTML = waktu.getHours();
          document.getElementById("menit").innerHTML = waktu.getMinutes();
          document.getElementById("detik").innerHTML = waktu.getSeconds();
        }

    </script>
