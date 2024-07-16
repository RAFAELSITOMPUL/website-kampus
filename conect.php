<?php
$conn = mysqli_connect ("localhost", "root", "", "dbwebstaida");

function query ($query) {
    global $conn;
    $result = mysqli_query ($conn, $query);
    $row = [];
   
    while ($row = mysqli_fetch_assoc ($result)){
        $rows [] = $row;   
    }
    return $rows;
}

function registrasi ($data){
    global $conn;
    $username = strtolower(stripslashes($data ["username"]));
    $password = mysqli_real_escape_string ($conn, $data["password"]);
    $password2 = mysqli_real_escape_string ($conn, $data["password2"]);

    //cek username udah ada atau belum//
    $result = mysqli_query($conn, "SELECT username FROM daftarusers WHERE username = '$username'");
    if (mysqli_fetch_assoc ($result)) {
        echo "<script>
             alert ('Username yang dipilih sudah terdaftar')
              </script>";
        return false;
    }
       //cek konfirmasi password//
       if ($password !== $password2) {
        echo "<script>
                alert ('konfirmasi password tidak sesuai!');
              </script>";
    return false;
    }
    //enkripsi password//
    $password = password_hash ($password, PASSWORD_DEFAULT); 
    //tambahkan userbaru kedata base//
    mysqli_query ($conn, "INSERT INTO daftarusers VALUES ('','$username', '$password')");
    return mysqli_affected_rows($conn);

}

function berita ($data) {
    global $conn;
    $judulberita = $_POST ["judulberita"];
    $judulringkas = $_POST ["judulringkas"];
    $isiberita = $_POST ["isiberita"];
    $gambarberita = $_POST ["gambarberita"];
   
     
    //upload gambar
    $gambarberita = upload ();
    if (!$gambarberita ){
        return false;
    }

    $query = "INSERT INTO berita VALUES
    ('', '$judulberita','$judulringkas', '$isiberita', '$gambarberita')";
    mysqli_query ($conn, $query);
    return mysqli_affected_rows ($conn);
  }

  function upload () {
    $namaFile = $_FILES ['gambarberita']['name'];
    $ukuranFile = $_FILES ['gambarberita']['size'];
    $error = $_FILES ['gambarberita']['error'];
    $tmpName=$_FILES ['gambarberita']['tmp_name'];

     //cek apakah tidak ada gambar yang diupload ??
    if ($error === 4) {
    echo "<script>
    alert ('pilih gambar terlebih dahulu');
    </script>";
    return false;
    }

    //cek yang diupload adalah gambar
$ekstensiGambarValid = ['jpg', 'jpeg', 'png']; //gambar yg tertera
$ekstensiGambar = explode ('.', $namaFile);
$ekstensiGambar = strtolower (end ($ekstensiGambar));

if (!in_array ($ekstensiGambar, $ekstensiGambarValid)) {
echo "<script>
alert ('yang anda upload bukan gambar');
</script>";
return false;
 }

//cek jika ukuran terlalu besar
if ($ukuranFile > 1000000) {
echo "<script>
alert ('ukuran gambar terlalu besar');
 </script>";
return false;
}

move_uploaded_file($tmpName,'gambar/'.$namaFile);
return $namaFile;

 }


 function edit ($sdt) {
    global $conn;
    $id = $sdt["id"];
    $judulberita = $_POST ["judulberita"];
    $judulringkas = $_POST ["judulringkas"];
    $isiberita = $_POST ["isiberita"];
    $query = "UPDATE berita SET 
                     judulberita = '$judulberita', judulringkas = '$judulringkas', isiberita = '$isiberita'
                     WHERE id = $id
                     ";
    mysqli_query ($conn, $query);
    return mysqli_affected_rows ($conn);
  }

 function delete ($id) {
    global $conn;
    mysqli_query ($conn, "DELETE FROM berita WHERE id = $id");
    return mysqli_affected_rows ($conn);
  }
  