<?php
	$d=$_GET['id'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$status = $_POST['selek'];
	$harga = $_POST['harga'];
	include 'koneksi.php';
	$query=mysqli_query($koneksi,"UPDATE barang SET nama='$nama',jenis='$jenis',status='$status',harga = '$harga' WHERE id = $d");

	header('location:sidebar6.php');
?>