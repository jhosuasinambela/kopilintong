<?php

	include 'koneksi.php';
	$id=$_GET['id'];

	$query=mysqli_query($koneksi,"DELETE FROM artikel where id=".$id);

	header('location:sidebar4.php');

?>