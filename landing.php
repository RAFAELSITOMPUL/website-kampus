<?php



require 'conect.php';
$mynews = query ("SELECT * FROM berita");

 



?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/stores7.css">

  <script src="https://kit.fontawesome.com/c9d4e76737.js" crossorigin="anonymous"></script>

  <title>STAIDA | SUMATRA SELATAN</title>
</head>

<body>
   
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="./gambaradmin/logostaida.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="text-light icon fa fa-search"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="landing.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="text-light icon fa fa-search"></i></a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="text-light icon fa fa-search"></i></button>
            </form> -->
        </div>
        </div>
    </nav>


    <nav class="navbar2 navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav2 navbar-nav ml-auto">
               
                <li class="nav-item active">
                    <a class="nav-link text-success" href="akademik.php">Akademik</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-success" href="penelitian.php">Penelitian</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-success" href="pengabdian.php">Pengabdian</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-success" href="#">Mahasiswa</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>


  <section id="caurosel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./gambar/pichero1.png" alt="First slide">

        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./gambar/pichero2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./gambar/pichero3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    </div>
  </section>

  <div class="selogan">
          <div class="card">
          <h1 class="text-center">Selogan</h1>
          <div class="container">
            <div class="card-body">
              <h5 class="card-title text-center">Lorem Ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus quis facere rerum soluta pariatur. Odio, harum sit quos accusantium ea odit, cum nesciunt incidunt exercitationem magni ipsum quibusdam id corporis consequatur ad. Non nostrum reprehenderit est quasi, ex veritatis eos voluptatum nam pariatur minima deleniti sunt, praesentium eveniet? Ipsam laudantium, rerum fuga exercitationem veritatis maxime et suscipit labore explicabo! Error, dolor necessitatibus! Sed esse minus in, perspiciatis velit possimus sapiente sunt cum, soluta, corrupti natus asperiores suscipit! Pariatur asperiores nesciunt reiciendis, quod velit ipsam, assumenda rerum repellat minus, deleniti praesentium officia labore omnis ipsa ratione possimus sit ab earum.</p>
            </div>
          </div>
          </div>
        </div>
  </div>

  <section id="store">
    <div class="container">
      <h1 class="text-center mt-4">Berita</h1>
      <div class="row"><?php foreach ($mynews as $row) :?>
        <div class="col-md-4"> 
          <div class="card mt-4">
          <img class="card-img-top" src="<?php echo "gambar/".$row["gambarberita"]?>" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $row["judulberita"];?></h5>
            <p class="card-text"><?= $row["judulringkas"];?></p>
          
            <a href="isiBerita.php?id=<?=$row ["id"];?>" class="btn btn-warning">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php endforeach;?> 
  </section>
  <br><br>
        
  <div class="pendaftaran mb-4">
          <div class="card">
          <div class="container">
            <div class="card-body">
              <h5 class="card-title text-center">Pendaftaran mahasiswa baru</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus quis facere rerum soluta pariatur. Odio, harum sit quos accusantium ea odit, cum nesciunt incidunt exercitationem magni ipsum quibusdam id corporis consequatur ad. Non nostrum reprehenderit est quasi, ex veritatis eos voluptatum nam pariatur minima deleniti sunt, praesentium eveniet? Ipsam laudantium, rerum fuga exercitationem veritatis maxime et suscipit labore explicabo! Error, dolor necessitatibus! Sed esse minus in, perspiciatis velit possimus sapiente sunt cum, soluta, corrupti natus asperiores suscipit! Pariatur asperiores nesciunt reiciendis, quod velit ipsam, assumenda rerum repellat minus, deleniti praesentium officia labore omnis ipsa ratione possimus sit ab earum.</p>
            </div>
          </div>
          </div>
        </div>
  </div>
  <section id="footer">
    <div class="card">
      <div class="card-header text-center">
      <a class="navbar-brand" href="#"><img src="./gambaradmin/logostaidafooter.png" alt="" srcset=""></a>
      </div>
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5 class="card-title">STAI DARUSSALAM SUMATERA SELATAN</h5>
              <p class="card-text">Desa Grobog wetan RT 04 RW 06 Kecamatan Pangkah Kabupaten Tegal +62 889-8583-9412</p>
              <a href="#" class="btn btn-primary">WHATSAPP</a>
            </div>
            <div class="col-md-4">
              <h5 class="card-title">Tentang kami</h5>
              <p class="card-text">Kami adalah sebuah usaha di bidang IT support yang menerima berbagai macam jasa, yaitu pemasangan cctv, Service Komputer/laptop dan juga menerima berbagai macam service dan menjual segala macam Accecories.
              </p>
            </div>
            <div class="col-md-4">
              <h5 class="card-title"></h5>
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-whatsapp"></i>
            </div>
          </div>
        </div>
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