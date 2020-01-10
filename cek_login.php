<?php
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$data1 = mysqli_query($koneksi,"select * from pembeli where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
$cek2 = mysqli_num_rows($data1);

 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:http://localhost:8080/PSW2/PA1/Admin/");
}else if($cek2 > 0){
	$pembeli='';
	while ($data3=mysqli_fetch_array($data1,MYSQLI_ASSOC)) {
		$pembeli=$data3['id'];
	}
	$_SESSION['id'] = $pembeli;
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:http://localhost:8080/PSW2/PA1/User/");
}else{
	header("location:http://localhost:8080/PSW2/PA1/");
}
?>