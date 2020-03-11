<?php
session_start();

	if(!isset($_SESSION['username'])) {
		header("location:admin-login.php");	
		
	} else { 
		$username = $_SESSION['username'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
    <style>
    	body{
    		font-size: 14px;
    	}
    	h3{
    		font-family: comic;
    		font-size: 24px;
    		color: blue;
    	}
    </style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  <div class="navbar-header">
		  	<p class="navbar-text">Pengiriman OKE </p>
		  </div>
		  <ul class="nav navbar-nav">
			  <li class="active"><a href="admin.php">Tambah Data</a></li>
			  <li><a href="data.php">Lihat Data</a></li>
		  </ul>

		  <ul class="nav navbar-nav navbar-right">
		  	
		  	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>		  	
		  </ul>

		</div>
	</nav>

	<!-- FORM INPUT DATA -->
	<div class="container" style="margin-top: 60px">
		<form class="form-horizontal" action="insertbarang.php" method="post">
			<h3> Tambahkan Data Pengiriman </h3>
			
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-pengirim">Nomor Resi</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="no-resi" id="nama-pengirim" required placeholder="Nomor Resi"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-pengirim">Nama Pengirim</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="nama-pengirim" id="nama-pengirim" required placeholder="Nama Pengirim"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="almt-pengirim">Alamat Pengirim</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="almt-pengirim" id="almt-pengirim" required placeholder="Alamat Pengirim"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="tlp-pengirim">Nomor Telepon</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="tlp-pengirim" id="tlp-pengirim" required placeholder="Nomor Telepon Pengirim"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-penerima">Nama Penerima</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="nama-penerima" id="nama-penerima" required placeholder="Nama Penerima"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="almt-penerima">Alamat Penerima</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="almt-penerima" id="almt-penerima" required placeholder="Alamat Penerima"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="berat">Berat Barang</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="berat" id="berat" required placeholder="Berat Barang"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="status">Status</label>
			  <div class="col-xs-5">
				<select class="form-control" id="status" name="status" >
					<option value="">--pilih--</option>
					<option value="Packing">Packing</option>
					<option value="Proses Pengiriman">Proses Pengiriman</option>
					<option value="Sampai Tujuan">Sampai Tujuan</option>
				</select>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="kota-asal">Kota Asal</label>
			  <div class="col-xs-5">
				<select class="form-control" id="kota-asal" name="kota-asal" >
					<option value="">--pilih--</option>
					<option value="1">Surabaya</option>
					<option value="2">Malang</option>
					<option value="3">Pasuruan</option>
					<option value="4">Ponorogo</option>
				</select>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="kota-tujuan">Kota Tujuan</label>
			  <div class="col-xs-5">
				<select class="form-control" id="kota-tujuan" name="kota-tujuan" >
					<option value="">--pilih--</option>
					<option value="1">Surabaya</option>
					<option value="2">Malang</option>
					<option value="3">Pasuruan</option>
					<option value="4">Ponorogo</option>
				</select>
			  </div>
			</div>

			<div class="form-group">
			  <label class="control-label col-sm-2" for="save-button"></label>
			  <div class="col-xs-5">
				<button class="btn btn-primary" name="save-button">Save</button>
			  </div>
			</div>
		</form>	
	</div>

	
</body>
</html>