  <style>
  h1,h2,p,a{
    font-family: sans-serif;
    font-weight: normal;
  }
 
  .jam-digital {
    overflow: hidden;
    width: 1200px;
    margin: 20px auto;
    border: 0px solid black;
    border-radius: 10px;
    padding-left: 30%;
    margin-top: 150px;

  }
  .kotak{
    float: left;
    width: 150px;
    height: 150px;
    background-color: #EF6811;
    border-radius: 6px;
  }
  .jam-digital p {
    color: #fff;
    font-size: 90px;
    text-align: center;
    margin-top: 12px;
    font-weight: bold;
  }
 
</style>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
        <div class="row">
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
      </div><!-- /.container-fluid -->
    </div>
    </div>
    


  <script>
     window.setTimeout("waktu()", 1000);
 
        function waktu() {
          var waktu = new Date();
          setTimeout("waktu()", 1000);
          document.getElementById("jam").innerHTML = waktu.getHours();
          document.getElementById("menit").innerHTML = waktu.getMinutes();
          document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
  </script>