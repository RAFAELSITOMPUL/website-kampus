
<?php
//1. jalankan session//
session_start();

//3. waktu cari login akan terbubung ke tambah_desain.php//
if (isset($_SESSION["login"])){
    header ("Location: admin.php");
    exit;
}
require 'conect.php';
if (isset ($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM daftarusers WHERE username = '$username'");
 
    //cek username
    if (mysqli_num_rows($result)=== 1) { 
     //cek password
     $row = mysqli_fetch_assoc($result);
     if (password_verify($password, $row["password"])) {
 
       //2. set sesion disini untuk login//
       $_SESSION["login"] = true;
        header("Location:loginadmin.php");
         exit;
     }
 }
 $error = true;
}

?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/logins.css">

    <title>login</title>
  </head>
  <body>
    
<section id = "box">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <a href="#"><img src="./resmi2.png" alt="" srcset=""></a>

        <?php if (isset ($error)):?>
            <p>Username dan Password salah !</p>
                 <?php endif;?>

        <form action = "" method = "post">
          <h1 class="text-center">LOGIN</h1>
          <h6 class="text-center">WEBSTAIDA</h6>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name = "username" id="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" >
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name = "password" id="password">
            </div>
            <div class="btn">
      <button type = "submit" name = "login" class="btn btn-success">LOGIN</button>
      </div>
            </form>
                    
                    </div>
                </div>

                </div>

</section>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

















