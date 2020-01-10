<?php
	$response = array();
	$judul=$_POST['judulfdbck'];
	$isi=$_POST['pesan'];
	$id=$_POST['id'];
	echo "$judul,$isi,$id";
 	include 'koneksi.php';

 	$query=mysqli_query($koneksi,"INSERT INTO feedback  values ('',$id,'$judul','$isi')");

	header('location:contact.php');

?>