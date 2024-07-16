<?php
session_start();


//2. cek session//
if (!isset($_SESSION["login"])){
  //semua yang di cari di database akan kembali ke login.php//
  header ("Location: loginadmin.php");
  exit;
}

require 'conect.php';

$id = $_GET ["id"];

if (delete ($id) > 0) {
echo "
    <script>
        alert ('data berhasil dihapus');
        document.location.href = 'admin.php';
    </script>
";

} else {
   echo "
    <script>
        alert ('data batal dihapus');
        document.location.href = 'admin.php';
    </script>
";
}

?>
