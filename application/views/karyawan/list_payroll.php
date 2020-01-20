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
            <br>
            <h1 class="m-0 text-dark">
              COMING SOON!
            </h1>
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
    </div>
    </