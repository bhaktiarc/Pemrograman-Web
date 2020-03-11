<?php
	session_start();
	require "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

  	$checkuser = mysqli_query($conn,
  		"SELECT * FROM admin WHERE username = '$username' ");

  	
  	$hasil = mysqli_fetch_array($checkuser);

  	if ($checkuser) {
  		$_SESSION['username'] = $hasil['username'];
      $_SESSION['id_admin'] = $hasil['id_admin'];
  		header('Location:admin.php');
  	} else {
  		echo "Password salah!";
  		echo "<a href='index.php'>Back</a>";
	}
  			






