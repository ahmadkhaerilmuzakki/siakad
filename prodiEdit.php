<?php
include "koneksi.php";
$kode_prodi = $_GET['kode_prodi'];

// Ambil data prodi berdasarkan kode_prodi
$queryEdit = "SELECT * FROM tabel_prodi WHERE kode_prodi = '$kode_prodi'";
$resultEdit = mysqli_query($koneksi, $queryEdit);
$dataEdit = mysqli_fetch_array($resultEdit);

$pesan = "";

if (isset($_POST['ubah'])) {
    $nama_prodi = $_POST['nama_prodi'];

    // Update data prodi
    $query = "UPDATE tabel_prodi SET nama_prodi = '$nama_prodi' WHERE kode_prodi = '$kode_prodi'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan = "<div class='alert alert-success text-center'>Data prodi berhasil diubah</div>";
    } else {
        $pesan = "<div class='alert alert-danger text-center'>Data prodi gagal diubah. " . mysqli_error($koneksi) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Prodi</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="aos-master/dist/aos.css" />
  <link rel="stylesheet" href="main.css" />
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="fontawesome/css/solid.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-4">
    <nav class="navbar navbar-expand-lg" style="background-color: #a4bfcc81; border-radius: 15px">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/utm.jpg" alt="Logo" width="40" height="40" style="border-radius: 20px;" />
          Universitas Teknologi Mataram
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link active" href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="khs.php"><i class="fa-solid fa-file"></i> KHS</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-file-lines"></i> KRS</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisian KRS</a></li>
                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a></li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari">
            <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </nav>

    <div class="card mt-4">
      <div class="card-header text-center" style="background-color: #a4bfccde;">EDIT PROGRAM STUDI</div>
      <div class="card-body">
        <?= $pesan ?>
        <form method="POST">
          <div class="mb-3">
            <label for="kode_prodi" class="form-label">Kode Prodi</label>
            <input type="text" class="form-control" name="kode_prodi" value="<?= $dataEdit['kode_prodi']; ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="nama_prodi" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" name="nama_prodi" value="<?= $dataEdit['nama_prodi']; ?>" required>
          </div>
          <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
          <a href="prodi.php" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.js"></script>
  <script src="aos-master/dist/aos.js"></script>
</body>
</html>
