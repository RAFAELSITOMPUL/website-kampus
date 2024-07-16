<?php
 session_start();


 // //2. cek session//
  if (!isset($_SESSION["login"])){
    //semua yang di cari di database akan kembali ke login.php//
    header ("Location: loginusers.php");
    exit;
  }




require 'conect.php';
$pesananku = query ("SELECT * FROM pesanans");
// $namaadmin = mysqli_query ($conn, "SELECT * FROM daftar");
// $tambahAbt = mysqli_query ($conn, "SELECT * FROM aboud");

// if (isset ($_POST["cari"])) {
//   $tokoku = cari($_POST["keyword"]);
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="ir.css">


    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="#">Sign out</a>
                    </li>
                </ul>
            </nav>

            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Customers
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
<!-- 
            <title>Dashboard User</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg">
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
                <form action = "" method = "post" class="form-inline" >
                    </form>
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
             <div class="container">
              <h1 class="text-center">RIWAYAT BELANJA</h1>
                 <div class="row justify-content-center"> <?php foreach ($pesananku as $row) :?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo "gambar/".$row["buktitransfer"]?>" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text">Nama Pemesan : <?= $row["username"];?></p>
                              <p class="card-text">Alamat : <?= $row["outled"];?></p>
                              <p class="card-text">Metode Pengiriman : <?= $row["paket"];?></p>
                              <p class="card-text">Code Barang Pesanan : <?= $row["codebarang"];?></p>
                            </div>
                          </div>
                        </div> 
                        <?php endforeach;?>
                    </div>
                   -->

</body>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>