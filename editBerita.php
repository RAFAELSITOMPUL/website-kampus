<?php 

require 'conect.php';
//ambil data dari url
$id = $_GET["id"];

//koneksi ke data base
$mynews = query ("SELECT * FROM berita WHERE id = $id")[0];

if (isset ($_POST ["submit"]) ) {

   if (edit  ($_POST)>0) {
      echo '<script>alert("Berita TelaH Di Edit."); document.location="admin.php?id='.$id.'";</script>';
    }else {
      echo "Pesan gagal dikirim";
    }
  }

?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/stores5.css">

  <script src="https://kit.fontawesome.com/c9d4e76737.js" crossorigin="anonymous"></script>

  <title>STAIDA | SUMATRA SELATAN</title>
</head>

<body>

  <nav class="navbaradm navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="text-light icon fa fa-search"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link light" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="text-light icon fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>

  <section id="dashboard">

    <div class="row">

      <div class="col-md-2 bg-dark">
        <div class="card-body bg-dark">
          <p><a href="admin.php">Home</a></p>
          <p><a href="kelolaberita.php">Kelola Berita</a></p>
          <p><a href="keloladosen.php">Kelola Dosen</a></p>
          <p><a href="">Kelola Pengumuman</a></p>
          <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
        </div>
      </div>
      <div class="col-md-10">
        <div class="card">
          <h1>HALAMAN KELOLA BERITA</h1>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mynews ["id"];?>"> 
            <!-- <textarea type="hidden" name="id" value="<?= $mynews ["id"];?>">  -->
              <div class="form-group">
                <label class="col-sm-2 col-form-label">JUDUL BERITA</label>
                <div class="col-sm-10">
                  <input type="text" name="judulberita" class="form-control" value="<?= $mynews["judulberita"];?>" required>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">SLUG</label>
                  <div class="col-sm-10">
                  <input type="text" name="judulringkas" class="form-control" value="<?= $mynews["judulringkas"];?>" required>
                    <!-- <input type="text" name="judulringkas" class="form-control" required> -->
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">ISI BERITA</label>
                  <div class="col-sm-10">
                  <input type="text" name="isiberita" class="form-control" value="<?= $mynews["isiberita"];?>" required>

                    <!-- <textarea class="form-control" name="isiberita" value="<?= $mynews["isiberita"];?>" required></textarea> -->
                    <!-- <input type="text" name="isiberita" class="form-control" required> -->
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="col-sm-2 col-form-label">GAMBAR BERITA</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambarberita" id="gambarberita" class="form-control" size="10" required>
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-sm-2 col-form-label">&nbsp;</label>
                  <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="EDIT BERITA">
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<br>
<br>
<br>
  <section id="footer">
    <div class="card">
      <div class="card-header text-center">
        STAIDA SUMSEL @2024
      </div>
  </section>
  </div>
  <script src="scroll.js"></script>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>