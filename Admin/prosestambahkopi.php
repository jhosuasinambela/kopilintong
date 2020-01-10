<?php
	$response = array();
	$folder="img/";
	$folder2="../User/img/";
	$status=0;
	$hot=0;
	$nama_barang=$_POST['nama'];
 	$harga_barang=$_POST['harga'];
 	$jenis_barang=$_POST['jenis'];
 	$gambar_barang=$_FILES['gambar']['name'];
 	move_uploaded_file($_FILES['gambar']['tmp_name'],$folder.$gambar_barang);
 	move_uploaded_file($_FILES['gambar']['tmp_name'],$folder2.$gambar_barang);

	include 'koneksi.php';
	

	$query=mysqli_query($koneksi,"INSERT INTO barang (nama, jenis, harga, status, hot, foto) values ('$nama_barang','$jenis_barang','$harga_barang','$status','$hot','$gambar_barang')");

	header('location:sidebar6.php');
	
?>