<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="img/logoksu2.png">
  <title>Nama Produk</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">SIPKL</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategori
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-4-col.php">PreOrder</a>
              <a class="dropdown-item" href="portfolio-4-col.php">Arabica</a>
              <a class="dropdown-item" href="portfolio-4-col.php">Robusta</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-home-2.php">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><img src="img/exit.jpg" style="width: 50px;height: 35px;"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mb-5 mt-5">
    <?php 
      $tampil=$_GET['id'];
      include 'koneksi.php';
      $query=mysqli_query($koneksi,'SELECT * FROM barang where id='.$tampil);
      while($wew=mysqli_fetch_array($query)){
    ?>
    <h1 class="mt-4 mb-3"><?=$wew['nama']?></h1>

    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="img/<?=$wew['foto']?>" style="width: 500px;height: 400px;">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Dekripsi : </h3>
         <p>Kopi ini adalah kopi jenis <?=$wew['jenis']?></p>
        <h3>Harga : </h3>
        <p>Rp. <?=$wew['harga']?>,00</p>
        <h3>Status : </h3>
        <?php
          if($wew['status'] == 0)
          {
            echo "<span class='badge badge-primary'>Tersedia</span>";
            echo "<br><br><br>";
            ?>
            <form action="transaksi.php" method="POST">
              <input type="hidden" name="idb" value="<?=$_GET['id']?>">
              <input type="number" name="jumlah" class="mb-4">
              <input type="submit"  class='btn btn-success btn-block' value="Beli">
            </form>
            <!-- <a href="transaksi.php?idb=<?=$_GET['id']?>&idp=<?=$_SESSION['id']?>" style='color: white;'> -->
            <!-- <button class='btn btn-success btn-block'>Beli</button></a> -->
            <?php
          }else{
            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
          }
        ?>
      </div>

    </div>
    <?php }?>
  </div>

  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 9 PA 1 2019</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
