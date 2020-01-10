
<?php
$koneksi = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","b7c36e2019969a","c7e4165b","heroku_7365398e2868881");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
