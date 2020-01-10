<?php

	include 'koneksi.php';
	$id=$_GET['id'];

	$query=mysqli_query($koneksi,"DELETE FROM barang where id=".$id);

	header('location:sidebar6.php');

?>