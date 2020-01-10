<?php
	date_default_timezone_set('Asia/Jakarta');
	$response = array();
	$folder="img/";
	$folder2="../User/img/";
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$name=$_POST['nama'];
	$gambar_artikel=$_FILES['gambartikel']['name'];
 	move_uploaded_file($_FILES['gambartikel']['tmp_name'],$folder.$gambar_artikel);
 	move_uploaded_file($_FILES['gambartikel']['tmp_name'],$folder2.$gambar_artikel);
	$now= date('d F Y , G:i A');

 	include 'koneksi.php';

 	$query=mysqli_query($koneksi,"INSERT INTO artikel (id_admin, judul, isi, foto, tanggal) values ('$name','$judul','$isi','$gambar_artikel','$now')");

	header('location:sidebar4.php');

?>