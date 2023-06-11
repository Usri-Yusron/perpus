<!-- manggil si koneksi.php -->
<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bismillah</title>

        <!-- buat botsrap -->
        <link href="bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
        <!-- botsrap end -->

        <!-- font style awesome -->
        <link rel="stylesheet" href="fontstyle-awesome/css/font-awesome.min.css">
        <!-- font style awesome end -->

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand">Data Base</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Team
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://instagram.com/usri.yusron?igshid=MzRlODBiNWFlZA==">Muhamad Usri Yusron</a></li>
                <li><a class="dropdown-item" href="https://instagram.com/agum.mn?igshid=NTc4MTIwNjQ2YQ==">Gumiwang Maysa Nusi</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
      <!-- akhir dari navbar -->

      <!-- awal judul -->
      <div class="container text-center mt-5">
        <div class="row align-items-end">
          <div class="col">
            <h1>Our Book Collection</h1>
          </div>
      </div>
      <!-- judul selesai -->

      <!-- awal table -->
      <div class="table-responsive mt-5">
        <table class="table align-middle table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>ISBN</th>
              <th>Tahun Terbit</th>
              <th>Jenis buku</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Tere Liye</td>
              <td>Gramedia</td>
              <td>15-2022-424</td>
              <td>20 mei 2022</td>
              <td>Novel</td>
              <td>
                <img src="media/buku.jpg" alt="" style="width: 100px;">
              </td>
              <td>
                <a href="proses.php?hapus=1" type="button" class="btn btn-danger">                  
                  <i class="fa fa-trash"></i>       <!-- link buat ikon dari treawesome-->
                </a>
                <a href="tambah.php?ubah=1" type="button" class="btn btn-success">
                  <i class="fa fa-pencil"></i>      <!-- link ikon-->
                </a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Adnan Oktar</td>
              <td>Solo press</td>
              <td>15-2022-424</td>
              <td>20 mei 2022</td>
              <td>Ensiklopedia</td>
              <td>
                <img src="media/lego.jpg" alt="" style="width: 100px;">
              </td>
              <td>
                <a href="proses.php?hapus=2" type="button" class="btn btn-danger">
                  <i class="fa fa-trash"></i>       <!-- link buat ikon dari treawesome-->
                </a>
                <a href="tambah.php?ubah=2" type="button" class="btn btn-success">
                  <i class="fa fa-pencil"></i>      <!-- link ikon-->
                </a>
              </td>
            </tr>
          </tbody>
        </table>  
      </div>
      <!-- table selesai -->

      <!-- buat tombol tambah -->
      <a href="tambah.php" type="button" class="btn btn-info mt-5" >
        tambah data
      </a>
      <!-- buat tombol tambah selesai -->
      
    <script>
        feather.replace()
      </script>

    <!-- java script buat aktifin hamburger menu -->
    <script src="js/script.js"></script>

</body>
</html>