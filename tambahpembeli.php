<?php
 	require 'rsa.php';
	$usernameku=$_POST['username'];
	$passwordku=$_POST['password'];
	$namaku=$_POST['nama'];
	$alamatku=encrypt($_POST['alamat']);
	$emailku=encrypt($_POST['email']);
	$teleponku=encrypt($_POST['telepon']);
	$salt ="";
	$hashed = "\$SHA\$".$salt."\$".hash('sha256',hash('sha256',$passwordku).$salt);

	include 'koneksi.php';

	$query=mysqli_query($koneksi,"INSERT INTO pembeli (username, password, nama, alamat, email, kontak) values ('$usernameku','$hashed','$namaku','$alamatku','$emailku','$teleponku')");

	header("https://kopilintong.herokuapp.com/User/");

?>
