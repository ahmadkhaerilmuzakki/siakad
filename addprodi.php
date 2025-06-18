<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $kode_prodi = $_POST['kode_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $pesan = "";

    $query = "INSERT INTO tabel_prodi (kode_prodi, nama_prodi) 
              VALUES ('$kode_prodi', '$nama_prodi')";
              
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan .= "<div align='center' style='color:green;'>Data prodi berhasil disimpan</div>";
    } else {
        $pesan .= "<div align='center' style='color:red;'>Data prodi gagal disimpan</div>";
        $pesan .= mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Prodi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="aos-master/dist/aos.css">
    <link rel="stylesheet" href="main.css">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" />
    <link href="fontawesome/css/brands.css" rel="stylesheet" />
    <link href="fontawesome/css/solid.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg my-3" style="background-color: #a4bfcc81; border-radius:15px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-center" style="border-radius: 20px;">
                    Universitas Teknologi Mataram
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="khs.php"><i class="fa-solid fa-file"></i> KHS</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-file-lines"></i> KRS</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisian KRS</a></li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a></li>
                        <li class="nav-item"><a class="nav-link active" href="login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="card mx-auto" style="max-width: 500px; background-color: #a4bfcc81;">
            <div class="card-header text-center" style="background-color: #a4bfccde; font-weight: bold;">
                Form Tambah Program Studi
            </div>
            <form method="POST" action="">
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" placeholder="Kode Prodi" required>
                        <label for="kode_prodi">Kode Prodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Nama Prodi" required>
                        <label for="nama_prodi">Nama Prodi</label>
                    </div>
                    <?php if (isset($pesan)) echo $pesan; ?>
                </div>
                <div class="card-footer text-end bg-transparent">
                    <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
                    <input type="reset" name="batal" class="btn btn-secondary" value="BATAL">
                    <a href="prodi.php" class="btn btn-link">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
</body>

</html>
