<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="img/logoksu2.png">

  <title>Artikel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body background="img/background.jpg">

  <!-- Navigation -->
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
            <a class="nav-link" href="sidebar4.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><img src="img/exit.jpg" style="width: 50px;height: 35px;"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container rounded" style="background-color: white;">
    <!-- Content Row -->
    <div class="row mt-4 mb-3">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="sidebar4.php" class="list-group-item mt-4 active">Buat Artikel</a>
          <a href="sidebar.php" class="list-group-item">Feedback Pelanggan</a>
          <a href="sidebar2.php" class="list-group-item">Pesanan</a>
          <a href="sidebar6.php" class="list-group-item">Kopi</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
        <h2 class="mt-4">Artikel</h2>
        <a href="sidebar3.php" class="btn btn-primary mt-2 mb-4">Tambah Artikel</a>
        <div class="row bg-faded" style="border-radius: 10px;" >
          <div class="col-8">
            <ul class="list-group mb-4">
              <?php 
                include 'koneksi.php';
                $query=mysqli_query($koneksi,"SELECT * FROM artikel");
                while ($hasil=$query->fetch_assoc()) {
              ?>
              <li class="list-group-item mb-3">
                <div class="row">
                  <div class="col-md-8">
                    <?=$hasil['judul'];?> 
                  </div>
                  <div class="col-md-4">
                    <a href="deletetikel.php?id=<?=$hasil['id']?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Apakah anda yakin?');">Delete</a>
                    <a href="blog-post.php?id=<?=$hasil['id']?>" class="badge badge-primary float-right ml-1">Detail</a>
                    <!-- <a href="sidebar8.php?id=<?=$hasil['id']?>" class="badge badge-warning float-right ml-1">Edit</a> -->  
                  </div>
                </div> 
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    <!-- /.row -->

    </div>
  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
