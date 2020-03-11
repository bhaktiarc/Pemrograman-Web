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
	$cabang = $_POST['cabang'];
	require_once("koneksi.php");

	$sql = "SELECT * FROM cabang WHERE alamat = '$cabang' ";
	$result = $conn->query($sql);
	if ($result-> num_rows > 0) {
		?>
		<div class="container">
		<h3  style="margin-top: 200px;">Data Cabang</h3>
		<table class="table table-hover" style="margin-top: 20px;">
			<thead>
				<th>Alamat</th>
				<th>Jalan</th>
				<th>Kode Pos</th>
				<th>Telepon</th>
				
			</thead>
			<tbody>
			<?php
				while($row = $result->fetch_assoc()) {
			?>
			<tr>
					<td><?php echo $row['alamat'];?></td>
					<td><?php echo $row['jalan'];?></td>
					<td><?php echo $row['kode_pos'];?></td>
					<td><?php echo $row['telp'];?></td>
			</tr>
			<?php
		}


	} else {
		?>
			<script>
				alert("Maaf data tidak ditemukan !" );
				window.location.href = 'index.php'; 
			</script>

		<?php
	}


	?>
		</tbody>
		</table>
		</div>
		
		
		</body>
		</html>