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
 
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
        <!-- /.row -->
      </div>
      <!--/. container-fluid -->
      </div>
      <div class="row">
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Daftar Hadir</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="departA" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-danger col-12 col-sm-6">
              <div class="card-header">
                <h3 class="card-title">Jam Kerja</h3>

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
                <canvas id="jamA" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                <canvas id="jamB" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <script>
       <?php foreach ($jumlah_absensi as $key => $val){
              if ($key == 0) {
                $a =  $val;
              } elseif ($key == 1) {
                $b =  $val;
              }  elseif ($key == 2) {
                $c =  $val;
              }  elseif ($key == 3) {
                $d =  $val;
              }  elseif ($key == 4) {
                $e =  $val;
              } else {
                $f =  $val;

              } 
            ?>
          <?php } ?>
   		var ctx = document.getElementById("departA").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'bar',
          data : {
        // label nama setiap Value
        labels:[
                  'Tepat Waktu',
                  'Terlambat ',
                  'Dinas',
                  'Mangkir',
                  'Cuti'
          ],
        datasets: [{
        	barPercentage: 1.0,
	        barThickness: 30,
	        maxBarThickness: 30,
	        minBarLength: 4,
          // Jumlah Value yang ditampilkan
           data:[<?= $c->jumlah; ?>,<?= $e->jumlah; ?>,<?= $b->jumlah; ?>,<?= $d->jumlah; ?>,<?= $a->jumlah; ?>],

          backgroundColor:[
                 'rgb(220, 20, 60)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)',
                 'rgb(0, 128, 128)',
                 'rgb(255, 0, 255)'
                 ],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

    var speedCanvas = document.getElementById("departemenB");

		Chart.defaults.global.defaultFontFamily = "";
		

		var dataFirst = {
		    label: "Terlambat",
		    data: [0, 59, 75, 20, 20, 55, 40],
		    lineTension: 0,
		    fill: false,
		    borderColor: 'rgb(220, 20, 60)'
		  };

		var dataSecond = {
		    label: "Tepat Waktu",
		    data: [20, 15, 60, 60, 65, 30, 70],
		    lineTension: 0,
		    fill: false,
		  borderColor: 'rgb(40, 178, 170)'
		  };

		var dataThird = {
		    label: "Lembur",
		    data: [40, 15, 65, 30, 40, 65, 75],
		    lineTension: 0,
		    fill: false,
		  borderColor: 'rgb(50, 205, 50)'
		  };

		var workHours = {
		  labels: ["Senin", "Selasa", "rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
		  datasets: [dataFirst, dataSecond, dataThird]
		};

		var chartOptions = {
		  legend: {
		    display: true,
		    position: 'bottom',
		    labels: {
		      boxWidth: 60,
		      fontColor: 'black'
		    }
		  }
		};

		var lineChart = new Chart(speedCanvas, {
		  type: 'line',
		  data: workHours,
		  options: chartOptions
		});

    <?php foreach ($jumlah_absensi_departemen as $key => $jml) {
      if ($key == 0) {
        $acuti = $jml;
      } elseif ($key == 1) {
        $adinas = $jml;
      } elseif ($key == 2) {
        $ahtw = $jml;
      } elseif ($key == 3) {
        $amangkir = $jml;
      } elseif ($key == 4) {
        $ater = $jml;
      } elseif ($key == 5) {
        $bcuti = $jml;
      } elseif ($key == 6) {
        $bdinas = $jml;
      } elseif ($key == 7) {
        $bhtw = $jml;
      } elseif ($key == 8) {
        $bmangkir = $jml;
      } elseif ($key == 9) {
        $bter = $jml;
      } else {
        $ab = null;
      }
    }?>

		var ctx = document.getElementById("jamA").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'Tepat Waktu',
                  'Terlambat ',
                  'Dinas',
                  'Mangkir',
                  'Cuti'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           label: "Departemen A",
          
           data:[<?= $ahtw->jumlah_absensi; ?>,<?= $ater->jumlah_absensi; ?>,<?= $adinas->jumlah_absensi; ?>,<?= $amangkir->jumlah_absensi; ?>,<?= $acuti->jumlah_absensi;?>],

          backgroundColor:[
                 'rgb(220, 20, 60)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)',
                 'rgb(0, 128, 128)',
                 'rgb(255, 0, 255)'
                 ]
        }],
        }
        });

        var ctx = document.getElementById("jamB").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'Tepat Waktu',
                  'Terlambat ',
                  'Dinas',
                  'Mangkir',
                  'Cuti'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           label: "Departemen A",
          
           data:[<?= $bhtw->jumlah_absensi; ?>,<?= $bter->jumlah_absensi; ?>,<?= $bdinas->jumlah_absensi?>,<?= $bmangkir->jumlah_absensi; ?>,<?= $bcuti->jumlah_absensi; ?>],

          backgroundColor:[
                 'rgb(220, 20, 60)',
                 'rgb(40, 178, 170)',
                 'rgb(50, 205, 50)',
                 'rgb(0, 128, 128)',
                 'rgb(255, 0, 255)'
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
