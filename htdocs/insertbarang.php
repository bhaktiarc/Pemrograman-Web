<?php
session_start();

	if(!isset($_SESSION['username'])) {
		header("location:admin-login.php");	
		
	} else { 
		$username = $_SESSION['username'];
	}
	
	$no_resi = $_POST['no-resi'];
	$nama_pengirim = $_POST['nama-pengirim'];
	$almt_pengirim = $_POST['almt-pengirim'];
	$tlp_pengirim = $_POST['tlp-pengirim'];
	$nama_penerima = $_POST['nama-penerima'];
	$almt_penerima = $_POST['almt-penerima'];
	$berat = $_POST['berat'];
	$kota_asal = $_POST['kota-asal'];
	$kota_tujuan = $_POST['kota-tujuan'];
	$status = $_POST['status'];
	$id_admin = $_SESSION['id_admin'];

	
	require_once("koneksi.php");

	
	$link = mysqli_connect($namahost, $username ,$password , $database);

	if ($link) {
		$sql = "INSERT INTO data_barang "
				. " (no_resi, nama_pengirim, alamat_pengirim, telp_peng, nama_penerima, alamat_penerima, berat, idkota_asal, idkota_tujuan, status, id_admin) VALUES "
				. " ('$no_resi', '$nama_pengirim', '$almt_pengirim', '$tlp_pengirim', '$nama_penerima', '$almt_penerima', '$berat', '$kota_asal', '$kota_tujuan', '$status', '$id_admin'); ";

		$result = mysqli_query($link, $sql);
		if($result) {
			?>
				<script>
					alert("Data telah berhasil ditambahkan");
					window.location.href = 'admin.php';
				</script>
			<?php 
			exit;

		} else {
			die("Query gagal dieksekusi. " . 
				mysqli_error($link));

		}
	}


?>