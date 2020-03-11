<?php
session_start();

	if(!isset($_SESSION['username'])) {
		header("location:admin-login.php");	
		
	} else { 
		$username = $_SESSION['username'];
	}
	
	require_once("koneksi.php");
	$ID = $_POST['id'];
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
	

	$link = mysqli_connect($namahost, $username ,$password , $database);

	if ($link) {
		$sql = "UPDATE data_barang SET
					no_resi = '$no_resi' , 
					nama_pengirim = '$nama_pengirim',
					alamat_pengirim = '$almt_pengirim',
					telp_peng = '$tlp_pengirim',
					nama_penerima = '$nama_penerima',
					alamat_penerima = '$almt_penerima',
					berat = '$berat',
					idkota_asal = '$kota_asal',
					idkota_tujuan = '$kota_tujuan',
					status = '$status' 
					WHERE idbarang = '$ID' " ;

		$result = mysqli_query($link, $sql);
		if($result) {
			header("location:data.php");
			exit;

		} else {
			die("Query gagal dieksekusi. " . 
				mysqli_error($link));

		}
	}


?>