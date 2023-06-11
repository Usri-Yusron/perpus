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
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">
                NIK
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik" placeholder="Ex : 3276030206010010">
            </div>

          </div>
        <div class="mb-3 row">
           <label for="nama" class="col-sm-2 col-form-label">
               Nama
           </label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="nama" placeholder="Ex : Muahamd Usri Yusron">
           </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">
                Alamat
            </label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="alamat" placeholder="Ex : jl.sukarajin 2 gg.sastrodihardjo 2 no.37">
            </div>
        </div>

        <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">
               Email
           </label>
           <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="Ex : yrn.norsuy@gmail.com">
           </div>
        </div>

        <div class="mb-3 row">
            <label for="no.tlp" class="col-sm-2 col-form-label">
                No.tlp
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no.tlp" placeholder="Ex : 08956177325255">
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

        <div class="mb-3 row mt-5">
            <div class="col">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>  
                    Login
                </button>
                <a href="salahjalan.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>  
                    Batal
                </a>
            </div>
        </div>

      </div>
</body>