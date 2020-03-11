<?php
	$namahost = "localhost";
	$username = "root";
	$password = "";	//password MySQLi anda
	$database = "pa_jasakirim"; //database anda       
  	$conn = mysqli_connect(
				    $namahost,
				    $username,
				    $password,
				    $database
    		   ) or die("Failed");