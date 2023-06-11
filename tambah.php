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
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
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

      
      <!-- tambah data -->
      <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
                <label for="penulis" class="col-sm-2 col-form-label">
                    Penulis
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="penulis" placeholder="Ex : Tere Liye">
                </div>

              </div>
            <div class="mb-3 row">
              <label for="penerbit" class="col-sm-2 col-form-label">
                  Penerbit
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" placeholder="Ex : Gramedia">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="isbn" class="col-sm-2 col-form-label">
                    ISBN
                </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="isbn" placeholder="Ex : 15-2022-123">
                </div>
            </div>

            <div class="mb-3 row">
              <label for="tahun_terbit" class="col-sm-2 col-form-label">
                  Tahun Terbit
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun_terbit" placeholder="Ex : 25 mei 2022">
              </div>
            </div>

            <div class="mb-3 row">
                <label for="jenis_buku" class="col-sm-2 col-form-label">
                    Jenis Buku
                </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenis_buku" placeholder="Ex : komik">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">
                    Foto
                </label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="foto">
                </div>
            </div>

            <div class="container text-center mt-5">
                <div class="col">
                  <!-- bahasa php untuk membedakan fitur edit data -->
                  <?php
                        if(isset($_GET['ubah'])) {
                  ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>  
                            Simpan perubahan
                        </button>
                    <?php
                      } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>  
                            tambah data
                        </button>
                    <?php
                      }
                    ?>
                    <!-- php selesai -->
                    <a href="kelola.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>  
                        Batal
                    </a>
                </div>
            </div>
        </form>
      </div>

</body>