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
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		  <div class="navbar-header">
		  	<p class="navbar-text">Pengiriman OKE </p>
		  </div>
		  <ul class="nav navbar-nav">
			  <li><a href="admin.php">Tambah Data</a></li>
			  <li class="active"><a href="data.php">Lihat Data</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>		  	
		  </ul>
		</div>
	</nav>
<?php
	require_once("koneksi.php");

	$sql = "SELECT * FROM data_barang INNER JOIN kota ON data_barang.idkota_asal=kota.idkota INNER JOIN admin ON data_barang.id_admin=admin.id_admin";
	$sql2 = "SELECT * FROM data_barang INNER JOIN kota ON data_barang.idkota_tujuan=kota.idkota";
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
	if($result -> num_rows > 0) {
		?>
		</form>
		<table border="2" class="table" style="width: 60%;margin-left: 20%; margin-top: 100px;">
			<thead>
				<th>Admin</th>
				<th>ID Barang</th>
				<th>No.Resi</th>
				<th>Nama Pengirim</th>
				<th>Alamat Pengirim</th>
				<th>Telepon Pengirim</th>
				<th>Nama Penerima</th>
				<th>Alamat Penerima</th>
				<th>Berat</th>
				<th>Asal</th>
				<th>Tujuan</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
			<?php
				$row2;
				while($row = $result->fetch_assoc()) {
					$row2 = $result2->fetch_assoc();
			?>
			<tr>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['idbarang'];?></td>
					<td><?php echo $row['no_resi'];?></td>
					<td><?php echo $row['nama_pengirim'];?></td>
					<td><?php echo $row['alamat_pengirim'];?></td>
					<td><?php echo $row['telp_peng'];?></td>
					<td><?php echo $row['nama_penerima'];?></td>
					<td><?php echo $row['alamat_penerima'];?></td>
					<td><?php echo $row['berat'];?></td>
					<td><?php echo $row['nama_kota'];?></td>
					<td><?php echo $row2['nama_kota'];?></td>
					<td><?php echo $row['status'];?></td>
					<?php echo "<td> <a href=\"crud.php?ID=$row[idbarang]&code=1\">Edit</a></td>"; ?>
					<?php echo "<td> <a href=\"crud.php?ID=$row[idbarang]&code=2\">delete</a></td>"; ?>
				</tr>
	<?php
	}
	?>
		</tbody>
		</table>
	<?php
	} else {
		?>
			<script>
				alert("Tidak ada data pengiriman ! Silahkan Tambah Data !" );
				window.location.href = 'admin.php'; 
			</script>

		<?php
	}
