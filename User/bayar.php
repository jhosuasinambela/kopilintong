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
            <a class="nav-link" href="bayar.php">Pesananku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><img src="img/exit.jpg" style="width: 50px;height: 35px;"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mb-5 mt-5">
    <h1 class="mt-4 mb-3">PESANANKU</h1>

    <div class="row">
      <?php 
                include 'koneksi.php';
                $query=mysqli_query($koneksi,"SELECT x.nama AS nama,x.harga AS harga,y.jumlah AS jumlah1,x.harga*y.jumlah AS jumlah, y.id as id, y.status as status FROM detail Y INNER JOIN barang X ON y.id_barang=x.id;");
                while ($hasil=$query->fetch_assoc()) {
                if($hasil['status'] == 0){
              ?>
      <div class="col-md-4">
              
          <div class="card h-100 text-center">
            <div class="card-body">
              <h4 class="card-title"><?=$hasil['nama']?></h4>
              <h6 class="card-subtitle mb-2 text-muted"><?=$hasil['jumlah1']?> x <?=$hasil['harga']?></h6>
              <h6 class="card-subtitle mb-2 text-muted">TOTAL = <?=$hasil['jumlah']?></h6>
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="updateStatusBarang.php?id=<?=$hasil['id']?>" class="btn btn-outline-danger btn-block">BAYAR</a>
            </div>
          </div>
          
        </div>
        <?php 
      }
      }  ?>
      </div>
    </div>
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
