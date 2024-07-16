<?php
session_start();


// //2. cek session//
 if (!isset($_SESSION["login"])){
   //semua yang di cari di database akan kembali ke login.php//
   header ("Location: loginusers.php");
   exit;
 }
 require 'conect.php';

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/stores.css">
  
    <script src="https://kit.fontawesome.com/c9d4e76737.js" crossorigin="anonymous"></script>

            <title>Farhan Store Official</title>
        </head>
        <body>
          <section id = "nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">FARHAN STORE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="dashboarduser.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>
            </nav>
           </section>
<div class="container">
  <section id= "caurosel">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./gambar/ecomerce1.png" alt="First slide">
     
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./gambar/ecomerce2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./gambaradmin/homeadmin.jpg" alt="Third slide">
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
     <section id = "store">
            <div class="container">
            <h1 class="text-center mb-4">Barang Elektronik</h1>
        <div class="row">
       <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/desktop1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Asus</h5>
            <p class="card-text">Rp 3.000.000</p>
            <p class="card-text">Code : 24566</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/desktop2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hp</h5>
            <p class="card-text">Rp 6.000.000</p>
            <p class="card-text">Code : 24566</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/desktop4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Samsung</h5>
            <p class="card-text">Rp 5.000.000</p>
            <p class="card-text">Code : 24566</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/desktop5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">asus Vivobook</h5>
            <p class="card-text">Rp 7.000.000</p>
            <p class="card-text">Code : 24566</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
    <h1 class="text-center mb-3">SPAREPERT</h1>
        <div class="row">
       <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/keyboard HyperX.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Keyboard</h5>
            <p class="card-text">Rp 70.000</p>
            <p class="card-text">Code : 2XXYZ6</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/ram.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ram 9 GB</h5>
            <p class="card-text">Rp 300.000</p>
            <p class="card-text">Code :  2XVZZ</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/stik.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Stik Sony</h5>
            <p class="card-text">Rp 30.000</p>
            <p class="card-text">Code : 2XVjd</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="./gambaradmin/th.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mouse</h5>
            <p class="card-text">Rp 70.000</p>
            <p class="card-text">Code : 2xnny</p>
            <a href="beliproduct.php" class="btn btn-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
</div>
        
</div>
                 
  </section>


                   <br><br>
   <section id = "footer">
                    <div class="card">
                      <div class="card-header text-center">
                       Farhan Store @2024
                      </div>
                      <div class="card-body">
                        <div class = "container">
                           <div class = "row">
                             <div class = "col-md-4">
                                <h5 class="card-title">Farhan Store</h5>
                                   <p class="card-text">Desa Grobog wetan RT 04 RW 06 Kecamatan Pangkah Kabupaten Tegal +62 889-8583-9412</p>
                                       <a href="#" class="btn btn-primary">WHATSAPP</a>
                      </div>
                      <div class = "col-md-4">
                                <h5 class="card-title">Tentang kami</h5>
                                   <p class="card-text">Kami adalah sebuah usaha di bidang IT support yang menerima berbagai macam jasa, yaitu pemasangan cctv, Service Komputer/laptop dan juga menerima berbagai macam service dan menjual segala macam Accecories.
                                   </p>
                                    

                             </div>

                             <div class = "col-md-4">
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
                <script src = "scroll.js"></script>
              </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>