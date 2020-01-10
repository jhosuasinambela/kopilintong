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

  <title>Contact</title>
  <link rel="icon" type="image/png" href="img/logoksu2.png">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">

</head>

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
    <h1 class="mt-4 mb-4">KSU HUMBANG COOPERATIVE
      <small>Lintong Nihuta</small>
    </h1>
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="img/humbang.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <p>Kami Adalah Salah Satu UKM Yang Berdiri Dalam Bentuk Koperasi Yang Didirikan Pada Tahun 2014 Dan Tentunya Memiliki Badan Hukum Yang Sah. KSU POM HUMBANG COOPERATIVE Adalah Salah Satu Koperasi Petani Di Desa Kami, Dimana Kami Bukan Hanya Untuk Berniat Menanam Dan Menjual Kopi Saja, Namun Kami Berusaha Menciptakan Produk Langsung Jadi Untuk Pasaran. Sumatera Lintong Coffee Adalah Merek Produk Kopi Kami. Kopi Asal Desa Kami, KOPI LINTONG Sangat Dikenal Baik Dipasaran Dunia.</p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-4">
        <h3>Contact Details</h3>
        <p>
          Nagasaribu I, Lintong Nihuta
          <br> Kabupaten Humbang Hasundutan
          <br>Sumatera Utara 22475
          <br>
        </p>
        <p>
          <abbr title="Phone">P</abbr>: 0813-9609-7206
        </p>
        <p>
          <abbr title="Hours">H</abbr>: Senin - Jumat: 9:00 AM to 5:00 PM
        </p>
      </div>
      <div class="col-lg-6 mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.774420414526!2d98.9030305142326!3d2.238225658701929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e1721aaaaaaab%3A0xbce1fb645c79772d!2sKsu+POM+Humbang!5e0!3m2!1sid!2sid!4v1558896480359!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>


    <div class="row mt-4 mb-4">
      <div class="col-lg-12 mb-4">
        <h3 class="text-center">Kirim Pesan</h3>
        <form action="feedback.php" method="POST">
          <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
          <div class="control-group form-group">
            <div class="controls">
              <label>Judul:</label>
              <input type="text" class="form-control" name="judulfdbck">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Isi:</label>
              <textarea rows="10" cols="100" class="form-control" name="pesan" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <input type="submit" class="btn btn-outline-success btn-block" value="Kirim">
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 9 PA 1 2019</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
