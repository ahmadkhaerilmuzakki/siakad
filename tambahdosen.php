<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nidn   = $_POST['nidn'];
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $jk     = $_POST['jns_kelamin'];
    $telpon = $_POST['telpon'];
    $pesan  = "";

    $query = "INSERT INTO tabel_dosen (nidn, nama, email, jns_kelamin, telpon) 
              VALUES ('$nidn', '$nama', '$email', '$jk', '$telpon')";
              
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan .= "<div class='alert alert-success text-center'>Data berhasil disimpan</div>";
    } else {
        $pesan .= "<div class='alert alert-danger text-center'>Data gagal disimpan: " . mysqli_error($koneksi) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Dosen</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="aos-master/dist/aos.css">
  <link rel="stylesheet" href="main.css">
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
  <link href="fontawesome/css/brands.css" rel="stylesheet" />
  <link href="fontawesome/css/solid.css" rel="stylesheet" />
  <link href="fontawesome/css/sharp-thin.css" rel="stylesheet" />
  <link href="fontawesome/css/duotone-thin.css" rel="stylesheet" />
  <link href="fontawesome/css/sharp-duotone-thin.css" rel="stylesheet" />
</head>

<body>
  <div class="container my-4">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #a4bfcc81; border-radius:15px">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="rounded-circle" style="border-radius: 20px;">
          Universitas Teknologi Mataram
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="beranda.php">
                <i class="fa-solid fa-house"></i> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="khs.php">
                <i class="fa-solid fa-file"></i> KHS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-file-lines"></i> KRS</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisian KRS</a>
                </li>
                <li>
                  <a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Form Tambah Dosen -->
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Form Tambah Dosen</h2>
        <form method="POST" action="">
          <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" name="nidn" id="nidn" class="form-control" placeholder="Masukkan NIDN" required>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jns_kelamin" id="jkL" value="L" checked>
              <label class="form-check-label" for="jkL">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jns_kelamin" id="jkP" value="P">
              <label class="form-check-label" for="jkP">Perempuan</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="telpon" class="form-label">Telepon</label>
            <input type="text" name="telpon" id="telpon" class="form-control" placeholder="Masukkan Nomor Telepon">
          </div>
          <div class="text-center">
            <button type="submit" name="simpan" class="btn btn-primary me-2">SIMPAN</button>
            <button type="reset" class="btn btn-secondary me-2">BATAL</button>
            <a href="dosen.php" class="btn btn-danger">Kembali</a>
          </div>
          <div class="mt-3 text-center">
            <?php if (isset($pesan)) echo $pesan; ?>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.js"></script>
  <script src="aos-master/dist/aos.js"></script>
</body>

</html>
