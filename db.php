<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = 'password';
	$dbname   = 'db_warungonline';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
 ?>