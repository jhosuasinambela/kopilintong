<?php
include "koneksi.php";
$id = $_GET['id'];

$sql = "UPDATE detail SET status = 1 where id=$id";
mysqli_query($koneksi, $sql);

header('location: bayar.php');
?>