<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="aos-master/dist/aos.css" />
    <link rel="stylesheet" href="main.css" />
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="fontawesome/css/brands.css" rel="stylesheet" />
    <link href="fontawesome/css/solid.css" rel="stylesheet" />
    <link href="fontawesome/css/sharp-thin.css" rel="stylesheet" />
    <link href="fontawesome/css/duotone-thin.css" rel="stylesheet" />
    <link href="fontawesome/css/sharp-duotone-thin.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/datatables.css" />
    <link rel="stylesheet" href="css/datatables.min.css" />
  </head>

  <body>
    <div class="container my-4">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #a4bfcc81; border-radius: 15px">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="rounded-circle" />
            Universitas Teknologi Mataram
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="khs.php"><i class="fa-solid fa-file"></i> KHS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-file-lines"></i> KRS</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisian KRS</a></li>
                  <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Cari" />
              <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
      </nav>

      <!-- Card Dosen -->
      <div class="card mt-4 shadow">
        <div class="card-header text-center fw-bold" style="background-color: #a4bfccde;">
          Dosen UTM Mataram
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
              <thead class="table-info">
                <tr>
                  <th>No</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tabel_dosen";
                $result = mysqli_query($koneksi, $sql);
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nidn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['jns_kelamin']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td>
                      <a href="editdosen.php?nidn=<?php echo $data['nidn']; ?>" class="btn btn-warning btn-sm">
                        <i class="fa-solid fa-pen"></i> Edit
                      </a>
                      <a href="dosenHapus.php?nidn=<?php echo $data['nidn']; ?>" class="btn btn-danger btn-sm"
                         onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
                        <i class="fa-solid fa-trash"></i> Hapus
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <div class="text-center mt-3">
            <a href="tambahdosen.php" class="btn btn-primary">
              <i class="fa-solid fa-plus"></i> Tambah Dosen
            </a>
          </div>
        </div>
        <div class="card-footer text-end bg-white border-top-0">
          <a href="#" class="btn" style="background-color: #a4bfccde; font-weight: 500">
            <i class="fa-solid fa-magnifying-glass"></i> Lainnya
          </a>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/datatables.min.js"></script>
    <script>
      // Aktifkan DataTables jika ID table digunakan
      // new DataTable("#example");
    </script>
  </body>
</html>
