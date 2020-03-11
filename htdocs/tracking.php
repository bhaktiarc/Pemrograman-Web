<!DOCTYPE html>
			<html>
			<head>
				<title>Tracking Barang</title>
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
			<style type="text/css">
				body {
					  background: linear-gradient(-45deg, #35577D, #141E30);
					  margin: 0;
					  padding: 0;
					  color: white;
					}
			</style>
			<!-- NAVBAR -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
				  <div class="navbar-header">
				  	<p class="navbar-text">Pengiriman OKE </p>
				  </div>
				  <ul class="nav navbar-nav">
					  <li><a href="index.php">Home</a></li>
				  </ul>
				  <form class="navbar-form navbar-left" action="cabang.php" method="post">
  					<div class="input-group">
    					<input type="text" class="form-control" placeholder="Cari kantor cabang " name="cabang">
    					<div class="input-group-btn">
      						<button class="btn btn-default" type="submit">
        					<i class="glyphicon glyphicon-search"></i>
      						</button>
    					</div>
  					</div>
		  		  </form>
				</div>
			</nav>

<?php

	$no_resi = $_POST['no-resi'];
	require_once("koneksi.php");

	$sql = "SELECT * FROM data_barang INNER JOIN kota ON data_barang.idkota_asal=kota.idkota WHERE data_barang.no_resi='$no_resi'";
	$sql2 = "SELECT * FROM data_barang INNER JOIN kota ON data_barang.idkota_tujuan=kota.idkota WHERE data_barang.no_resi='$no_resi'";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
	if ($result-> num_rows > 0) {
		
		
		while ($row = $result->fetch_assoc()) {
			$row2 = $result2->fetch_assoc();
			?>
			<div class="container">
			<h3  style="margin-top: 200px;">Status Pengiriman</h3>
			<table class="table table-hover" style="margin-top: 20px;">
				<thead>
				  <tr>
					<th>No. Resi</th>
					<th>Nama Pengirim</th>
					<th>Alamat Pengirim</th>
					<th>Nama Penerima</th>
					<th>Alamat Penerima</th>
					<th>Berat</th>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Status</th>
				  </tr>
				</thead>
			<tbody>
			<tr>
					<td><?php echo $row['no_resi'];?></td>
					<td><?php echo $row['nama_pengirim'];?></td>
					<td><?php echo $row['alamat_pengirim'];?></td>
					<td><?php echo $row['nama_penerima'];?></td>
					<td><?php echo $row['alamat_penerima'];?></td>
					<td><?php echo $row['berat'];?></td>
					<td><?php echo $row['nama_kota'];?></td>
					<td><?php echo $row2['nama_kota'];?></td>
					<td><?php echo $row['status'];?></td>
					
			</tr>
			</tbody>
		</table>
		</div>
		
		</body>
		</html>
			<?php
		}


	} else {
		?>
			<script>
				alert("Maaf data tidak ditemukan. Silahkan cek kembali nomor resi Anda :)" );
				window.location.href = 'index.php'; 
			</script>

		<?php
	}


	?>
		