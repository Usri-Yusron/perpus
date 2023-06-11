<!-- manggil koneksi database -->
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'perpustakaan';
    $conn = mysqli_connect($host, $user, $pass, $db);
    //coba koneksi
    if ($conn){
      //echo "konek berhasil";
    }

    // manggil si database
    mysqli_sellect_db()
?>
