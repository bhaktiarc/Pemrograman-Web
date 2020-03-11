<?php
session_start();

	if(!isset($_SESSION['username'])) {
		header("location:admin-login.php");	
		
	} else { 
		$username = $_SESSION['username'];
	}

	require_once("koneksi.php");
	if (empty($_GET['code']))
      header('location:admin.php');
    else if (($_GET['code']==1)||($_GET['code']==2)){  
	$id=$_GET['ID'];
      $q = mysqli_query(
                $conn, 
                "SELECT * 
                 FROM data_barang 
                 WHERE idbarang=$id");
       $data = mysqli_fetch_array($q);
       if($_GET['code']==1){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
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
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  <div class="navbar-header">
		  	<p class="navbar-text">Pengiriman OKE </p>
		  </div>
		  <ul class="nav navbar-nav">
			  <li><a href="admin.php">Tambah Data</a></li>
			  <li><a href="data.php">Lihat Data</a></li>
		  </ul>

		  <ul class="nav navbar-nav navbar-right">
		  	
		  	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>		  	
		  </ul>

		</div>
	</nav>

	<!-- FORM INPUT DATA -->
	<div class="container" style="margin-top: 60px">
		<form class="form-horizontal" action="edit.php" method="post">
			<h3> Tambahkan Data Pengiriman </h3>
			<div class="form-group">
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="id" style="visibility: hidden;" value="<?php echo $data['idbarang'];?>" />
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-pengirim">Nomor Resi</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="no-resi" id="nama-pengirim" value="<?php echo $data['no_resi']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-pengirim">Nama Pengirim</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="nama-pengirim" id="nama-pengirim" value="<?php echo $data['nama_pengirim']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="almt-pengirim">Alamat Pengirim</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="almt-pengirim" id="almt-pengirim" value="<?php echo $data['alamat_pengirim']; ?>""/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="tlp-pengirim">Nomor Telepon</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="tlp-pengirim" id="tlp-pengirim" value="<?php echo $data['telp_peng']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="nama-penerima">Nama Penerima</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="nama-penerima" id="nama-penerima" value="<?php echo $data['nama_penerima']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="almt-penerima">Alamat Penerima</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="almt-penerima" id="almt-penerima" value="<?php echo $data['alamat_penerima']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="berat">Berat Barang</label>
			  <div class="col-xs-5">
				<input class="form-control " type="text" name="berat" id="berat" value="<?php echo $data['berat']; ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="status">Status</label>
			  <div class="col-xs-5">
				<select class="form-control" id="status" name="status" >
					<option value="">--pilih--</option>
					<?php if($data['status'] == "Packing"){
						?>
						<option value="Packing" selected>Packing</option>
						<option value="Proses Pengiriman">Proses Pengiriman</option>
						<option value="Sampai Tujuan">Sampai Tujuan</option>
						<?php
					} elseif ($data['status'] == "Proses Pengiriman") {
						?>
						<option value="Packing">Packing</option>
						<option value="Proses Pengiriman" selected>Proses Pengiriman</option>
						<option value="Sampai Tujuan">Sampai Tujuan</option>
						<?php
					} elseif ($data['status'] == "Sampai Tujuan") {
						?>
						<option value="Packing">Packing</option>
						<option value="Proses Pengiriman">Proses Pengiriman</option>
						<option value="Sampai Tujuan" selected>Sampai Tujuan</option>
						<?php
					}
					?>
				</select>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="kota-asal">Kota Asal</label>
			  <div class="col-xs-5">
				<select class="form-control" id="kota-asal" name="kota-asal" >
					<option value="">--pilih--</option>
					<?php if ($data['idkota_asal'] == "1") {
						?>
						<option value="1" selected>Surabaya</option>
						<option value="2">Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_asal'] == "2") {
						?>
						<option value="1" >Surabaya</option>
						<option value="2" selected>Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_asal'] == "3") {
						?>
						<option value="1">Surabaya</option>
						<option value="2">Malang</option>
						<option value="3" selected>Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_asal'] == "4") {
						?>
						<option value="1">Surabaya</option>
						<option value="2">Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4" selected>Ponorogo</option>
						<?php
					}
						?>
				</select>
			  </div>
			</div>
			<div class="form-group">
			  <label class="control-label col-sm-2" for="kota-tujuan">Kota Tujuan</label>
			  <div class="col-xs-5">
				<select class="form-control" id="kota-tujuan" name="kota-tujuan" >
					<option value="">--pilih--</option>
					<?php if ($data['idkota_tujuan'] == "1") {
						?>
						<option value="1" selected>Surabaya</option>
						<option value="2">Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_tujuan'] == "2") {
						?>
						<option value="1" >Surabaya</option>
						<option value="2" selected>Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_tujuan'] == "3") {
						?>
						<option value="1">Surabaya</option>
						<option value="2">Malang</option>
						<option value="3" selected>Pasuruan</option>
						<option value="4">Ponorogo</option>
						<?php
					} elseif ($data['idkota_tujuan'] == "4") {
						?>
						<option value="1">Surabaya</option>
						<option value="2">Malang</option>
						<option value="3">Pasuruan</option>
						<option value="4" selected>Ponorogo</option>
						<?php
					}
						?>
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
<?php
		}
		else {
    		mysqli_query($conn, "DELETE FROM data_barang WHERE idbarang = $id");
    		header('location:data.php');
    	}
    }
?>