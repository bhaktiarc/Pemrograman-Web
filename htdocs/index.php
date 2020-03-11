<!DOCTYPE html>
<html>
<head>
    <title>Pengiriman OKE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/adminstyle.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    .form-inline {
      margin-top: 10px;
      margin-bottom:5px;
    }
    .copyright{
      text-align: center;
      color:white;
      padding-top:15px;
      padding-bottom:15px;
      font:normal 80% Verdana,Trebuchet,Arial,Sans-serif;
      background-color: black;
      margin-top: 253px;
    }


  </style>
</head>
<body style="background-color:#F0FFFF;">
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <p class="navbar-text">Pengiriman OKE </p>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="cabang.php" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari kota kantor cabang " name="cabang">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
    <!-- gambar-->
    <div class="container" style="margin-top: 50px; margin-left: -15px;">
      <div class="row">
        <div class="col-sm-12">
      <img class="img-fluid" src="gambar.jpg" style="width: 133.1%; height: 250px;">
        </div>
      </div>
    </div>
    
    <!-- tracking resi -->
    
    <div class="panel panel-primary" style="margin-top: 20px; margin-left: 5%; width: 50%;">
        <div class="panel-heading">
          <h3 class="panel-title">Lacak Kiriman</h3>
        </div>
      <div class="panel-body">
        <form action="tracking.php" method="post" >
            <div class="form-group">
              <div class="input-group">
                  <input type="text" class="form-control" name="no-resi" placeholder="Masukkan nomor resi">
                  <span class="input-group-btn"><button class="btn btn-success" type="submit">Cari</button></span>
              </div>
            </div>
        </form>
      </div>

    </div>

    <!-- cek tarif -->
    <div class="panel panel-primary " style="margin-top: -140px; margin-left: 60%; width: 35%; height:50%">
      <div class="panel-heading">
        <h3 class="panel-title">Cek Tarif</h3>
      </div>
    <div class="panel-body" style="width: 100%">
      <form  class="form-inline" action="cektarif.php" method="post">
          <div class="form-group">
            <div class="input-group" style="width:100%">
                <select class="form-control" id="kota_idkota" name="kota_idkota" required >
          <?php
          $conn=mysqli_connect("localhost","root","","pa_jasakirim");
          $sql_asal = "SELECT * FROM kota ";
          $id1="SELECT * FROM kota";
          $result = $conn->query($sql_asal);
          foreach ($result as $key => $value) {
            ?><option value="<?php echo $value['idkota']?>"><?php echo $value["nama_kota"] ?></option><?php
            var_dump($value);
          }
          ?>
          </select>
          </div>
          </div>
          <span class="glyphicon glyphicon-arrow-right"></span>
          <div class="form-group">
            <div class="input-group">
          <select class="form-control" id="kota_idkota1" name="kota_idkota1" required>

          <?php
          $conn=mysqli_connect("localhost","root","","pa_jasakirim");
          $sql_asal = "SELECT * FROM kota ";
          $id2="SELECT * FROM kota";
          $result = $conn->query($sql_asal);
          foreach ($result as $key => $value) {
            ?><option value="<?php echo $value['idkota']?>"><?php echo $value["nama_kota"] ?></option><?php
            var_dump($value);
          }
          ?>

          </select>
            </div>
            </div>
                  <div class="input-group">
                  <input type="number" class="form-control" name="berat" placeholder="kg" style="width:70px" required>
              </div>
            <div class="input-group">
            <label class="control-label col-sm-2" for="save-button"></label>
            <div>
            <button class="btn btn-success" name="save-button" id="save">Cek</button>
            </div>
        </div>
        </form>
        </div>
        </div>
    <div class="copyright">
    copyright &#169; 2017 Kelompok 7 Pemrograman Web TIF-G
</div>
</body>
</html>