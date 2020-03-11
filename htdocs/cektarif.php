<!DOCTYPE html>
			<html>
			<head>
				<title>Cek Tarif</title>
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
.tabletable-hover{
	background-color: blue;
}
body{
	background: linear-gradient(#FFB6C1,#AFEEEE,#7B68EE);
}
</style>
</head>

			<body>
			
			<!-- NAVBAR -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
				  <div class="navbar-header">
				  	<p class="navbar-text">Pengiriman OKE </p>
				  </div>
				  <ul class="nav navbar-nav">
					 <li><a href="index.php" onclick="javascript()">Home</a></li>
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
				
				$kota_asal = $_POST['kota_idkota'];
				echo $kota_asal;
				$kota_tujuan = $_POST['kota_idkota1'];
				$berat = $_POST['berat'];
				require_once('koneksi.php');

				$sql_tarif = "SELECT * FROM tarif WHERE kota_idkota = '$kota_asal' AND kota_idkota1 = '$kota_tujuan' ";
				if ($result = $conn->query($sql_tarif)) {
					var_dump($result);
					while ($row = $result->fetch_row()) {
			   			$tarif = $row[1];
			  	}
					}
				$harga = $tarif * $berat;

				$sql = "SELECT id_tarif, tarif, dariKota.nama_kota as 'Dari Kota', tujuanKota.nama_kota as 'Tujuan Kota'
			   			FROM tarif  LEFT JOIN kota AS dariKota ON dariKota.idkota = tarif.kota_idkota LEFT JOIN kota AS tujuanKota ON tujuanKota.idkota = tarif.kota_idkota1
			   			WHERE kota_idkota = '$kota_asal' AND kota_idkota1 = '$kota_tujuan'";
			 	$result = $conn->query($sql);
			 	if ($result) {
			  	while ($row = $result->fetch_assoc()) {
			  	?>
			  
			   <div class="container">
			   		<h3  style="margin-top: 200px;text-align: center;color:blue">Tarif Pengiriman</h3>
			  		 <table class="table table-hover" style="margin-top: 20px;">
			    	<thead>
			    			 <th>Kota Asal</th>
			     			 <th>Kota Tujuan</th>
			     			 <th>Tarif  </th>
			   		 </thead>
			   		<tbody>
			   				<tr>
			     			<td><?php echo $row['Dari Kota'];?></td>
			     			<td><?php echo $row['Tujuan Kota'];?></td>
			     			<td><?php echo "Rp. ".$harga.".-";?></td> 
	 					   </tr>
			   		</tbody>
			   		</table>
			   </div>
			  		 <?php
			 		 }
					 } else {?>
			    			<?php
			   					echo "Data Belum Ada!";
			 		 }
			 
							 ?>
  					</tbody>  
  </body>
  <script> function javascript(){
    alert('Anda Akan Kembali Ke Home');
  }</script>
  </html>