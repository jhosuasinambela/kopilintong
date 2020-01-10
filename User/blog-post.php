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
  <style type="text/css">
    .wadidaw{
      width: 50px;
      height: 50px;
    }
  </style>

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
    <?php 
      $tampil=$_GET['id'];
      include 'koneksi.php';
      $query=mysqli_query($koneksi,'SELECT * FROM artikel where id='.$tampil);
      while($wew=mysqli_fetch_array($query)){
    ?>
    <h1 class="mt-4 mb-3"><?=$wew['judul']?></h1>
    
    <div class="row">
      <div class="col-lg-8">
        <img class="img-fluid rounded" src="img/<?=$wew['foto']?>" style="height: 400px; width: 750px">

        <hr>

        <p>Rilis <?=$wew['tanggal']?></p>

        <hr>
        <div class="container-fluid">
            <p><?=$wew['isi']?></p>
        </div>
        

        <hr>
        <?php }?>
      </div>

      <div class="col-md-4">

        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>


        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

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
