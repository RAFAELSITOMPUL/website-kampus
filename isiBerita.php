<?php 

require 'conect.php';
//ambil data dari url
$id = $_GET["id"];

//koneksi ke data base
$mynews = query ("SELECT * FROM berita WHERE id = $id")[0];

if (isset ($_POST ["submit"]) ) {

   if (edit  ($_POST)>0) {
      echo '<script>alert("Berita Telah Ditambahkan."); document.location="admin.php?id='.$id.'";</script>';
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
                    <a class="nav-link light" href="landing.php">Home <span class="sr-only">(current)</span></a>
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


 

  <section id="store">
    <div class="container">
      <h1 class="text-center mt-12"><?= $mynews ["judulberita"];?></h1>
      <div class="row">
    <?php foreach ($mynews as $row) :?>
        <div class="col-md-12"> 
          <div class="card mt-4">
          <img class="card-img-top" src="<?php echo "gambar/".$mynews["gambarberita"]?>" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?= $mynews ["judulringkas"];?></p>
            <p class="card-text"><?= $mynews["isiberita"];?></p>
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
   
      </div>
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5 class="card-title">Farhan Store</h5>
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