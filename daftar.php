<?php
require 'conect.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0)
    echo "<script>
               alert ('PENDAFTARAN BERHASIL SILAHKAN LOGIN');
             </script>";
} else {
  echo mysqli_error($conn);
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
  <link rel="stylesheet" href="./style/daftarusers.css">

  <script src="https://kit.fontawesome.com/c9d4e76737.js" crossorigin="anonymous"></script>

  <title>Daftar</title>
</head>

<body>
  <section id="saran">
    <div class="container mb-2">
      <h3> DAFTAR USER</h3>
      <h6 class="text-center">FARHAN STORE</h6>

      <form action="" method="post">
        <ul>
          <li> <label for="username">Nama</label>
            <input type="text" name="username" id="nama">
          </li>

          <li> <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </li>

          <li> <label for="password2">Password</label>
            <input type="password" name="password2" id="password2">
          </li>
          <br>
          <div class="btn">
      <button type = "submit" name = "register" class="btn btn-success">DAFTAR</button>
      </div>

          </li>
        </ul>
        <p class="text-center">Sudah punya akun ? Silahkan <a href="loginusers.php">Login</a>
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
<!DOCTYPE html>

<head>
  <title>regrestrasi</title>
  <!-- <link rel="stylesheet" href="daftar.css"> -->

</head>

<body>