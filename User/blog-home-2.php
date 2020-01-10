<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="img/logoksu2.png">
  <title>Artikel</title>
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

  <div class="container">
    <h1 class="mt-4 mb-3">Article
      <small>Baca sambil ngopi</small>
    </h1>
    <?php 
      include 'koneksi.php';
      $query=mysqli_query($koneksi,"SELECT * FROM artikel");
      while ($hasil=$query->fetch_assoc()) {
    ?>
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="#">
              <img class="img-fluid rounded" src="img/<?=$hasil['foto']?>" style="width: 500px; height: 250px">
            </a>
          </div>
          <div class="col-lg-6">
            <h4 class="card-title"><?=$hasil['judul']?></h4>
            <p class="card-text"><?=$hasil['isi']?></p>
            <a href="blog-post.php?id=<?=$hasil['id']?>" class="btn btn-primary">Lebih Lengkap &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        Rilis pada <?=$hasil['tanggal']?>
      </div>
    </div>
  <?php } ?>
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
