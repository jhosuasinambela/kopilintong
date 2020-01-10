<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KOPI LINTONG</title>
  <link rel="icon" type="image/png" href="img/logoksu2.png">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">

</head>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('img/Lintong-02.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('img/Lintong-02.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('img/Lintong-02.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
<body background="img/background.jpg">
  
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

  <div class="container rounded" style="background-color: white;">

    <h1 class="my-4 text-center mt-4">Welcome to Sistem Informasi Kopi Lintong</h1>
    <br><br>
    <div class="row">
      <div class="col-lg-8">
        <h2>KSU HUMBANG COOPERATIVE</h2>
        <p>Kami Adalah Salah Satu UKM Yang Berdiri Dalam Bentuk Koperasi Yang Didirikan Pada Tahun 2014 Dan Tentunya Memiliki Badan Hukum Yang Sah. KSU POM HUMBANG COOPERATIVE Adalah Salah Satu Koperasi Petani Di Desa Kami, Dimana Kami Bukan Hanya Untuk Berniat Menanam Dan Menjual Kopi Saja, Namun Kami Berusaha Menciptakan Produk Langsung Jadi Untuk Pasaran. Sumatera Lintong Coffee Adalah Merek Produk Kopi Kami. Kopi Asal Desa Kami, KOPI LINTONG Sangat Dikenal Baik Dipasaran Dunia.</p>
        <ul>
          <li>
            <strong>Original</strong>
          </li>
          <li>International</li>
          <li>Fenomenal</li>
          <li>Halal</li>
        </ul>
        
      </div>
      <div class="col-lg-4 d-flex flex-row-reverse">
        <img class="img-fluid rounded p-2" src="img/kopiquote.jpg" alt="">
      </div>
    </div>

    <hr>

    <div class="row mb-4">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-outline-danger btn-block mb-4" href="portfolio-4-col.php">Belanja</a>
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
