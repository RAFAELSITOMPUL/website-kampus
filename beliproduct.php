<?php

session_start();


//2. cek session//
if (!isset($_SESSION["login"])){
  //semua yang di cari di database akan kembali ke login.php//
  header ("Location: login.php");
  exit;
}
require 'conect.php';

 if (isset ($_POST ["submit"]) ) {

    if (pesanan  ($_POST)>0) {
       echo "Pesan anda telah terkirim";
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
    <link rel="stylesheet" href="./style/beliproduct.css">
  
    <script src="https://kit.fontawesome.com/c9d4e76737.js" crossorigin="anonymous"></script>

            <title>Beli Product</title>
        </head>
        <body>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">  
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <h4>Nama User</h4>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pesanans.php">haai User</a>
                    </li>
                </ul>
                </div>
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="dashboarduser.php">Home</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Lacak Pemesanan</a>
                    </li>
                </ul>
                    <li class = "nav-item">
                    <a href = "logout.php" class="text-danger">logout</a>
                </li>
             </nav> 
           
        
<section id = "boxbeli">
<div class = "container mb-4">
  <h3>Beli Product</h3>
  <form action = "" method = "post" enctype="multipart/form-data">
   <ul>
      <li> <label for="username"> Nama</label>
         <input type = "text" name = "username" id = "username">
      </li>
      <li> <label for="nohp"> No Hp</label>
         <input type = "text" name = "nohp" id = "nohp">
      </li>
      <li> <label for="outled">Alamat</label>
         <input type = "text" name = "outled" id = "outled">
      </li>
      <li> <label for="codebarang">Kode Barang</label>
         <input type = "text" name = "codebarang" id = "codebarang">
      </li>
      <label for="paket">Metode Pengiriman</label>
    <select class="form-control" name="paket" id="paket">
      <option>Pilih Metode Pengiriman</option>
      <option>JNT</option>
      <option>JNE</option>
      <option>POST</option>
      <option>TIKI</option>
      <option>CARGO</option>
    </select>
      <li> <label for="buktitransfer">Bukti Transfer</label>
         <input type = "file" name = "buktitransfer" id = "buktitransfer">
      </li>
     
        <br>
        <div class="btn">
      <button type = "submit" name = "submit" class="btn">BELI</button>
      </div>
      </li>
   </ul>
 </section>  
</div>
</div>
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>