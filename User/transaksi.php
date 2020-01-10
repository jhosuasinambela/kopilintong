<?php
session_start();
include "koneksi.php";
	$idb = $_POST['idb'];
	$id =  $_SESSION['id'];
	$jumlah = $_POST['jumlah'];
	$data = mysqli_query($koneksi, "INSERT INTO detail VALUES('', $idb , $id, $jumlah, '', '')");
	header('location: bayar.php');
	


?>