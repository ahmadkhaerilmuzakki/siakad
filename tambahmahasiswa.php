<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama_mhs'];
    $kode_prodi = $_POST['prodi'];
    $semester   = $_POST['semester']; // ambil dari form
    $jk         = $_POST['jns_kelamin'];
    $alamat     = $_POST['alamat'];
    $pesan      = "";

    // Ambil nama_prodi dari tabel_prodi
    $query_prodi = mysqli_query($koneksi, "SELECT nama_prodi FROM tabel_prodi WHERE kode_prodi = '$kode_prodi'");
    $data_prodi = mysqli_fetch_assoc($query_prodi);
    $prodi = $data_prodi['nama_prodi'];

    $query = "INSERT INTO tabel_mahasiswa (nim, nama_mhs, prodi, semester, jns_kelamin, alamat) 
              VALUES ('$nim', '$nama', '$prodi', '$semester', '$jk', '$alamat')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan .= "<div class='alert alert-success text-center'>Data berhasil disimpan</div>";
    } else {
        $pesan .= "<div class='alert alert-danger text-center'>Data gagal disimpan</div>";
        $pesan .= mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
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
        <nav class="navbar navbar-expand-lg shadow-sm mb-4" style="background-color: #a4bfcc81; border-radius:15px">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="rounded-circle">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-file-lines"></i> KRS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisian KRS</a></li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="card shadow rounded">
            <div class="card-header text-center bg-info text-white fw-bold">
                Tambah Biodata Mahasiswa
            </div>
            <form method="POST" action="">
                <div class="card-body px-5">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                        <div class="col-sm-9">
                            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama Mahasiswa">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-9">
                            <select name="prodi" class="form-select">
                                <?php
                                $queryprodi = "SELECT * FROM tabel_prodi";
                                $resultprodi = mysqli_query($koneksi, $queryprodi);
                                while ($dataprodi = mysqli_fetch_array($resultprodi)) {
                                    echo "<option value='" . $dataprodi['kode_prodi'] . "'>" . $dataprodi['nama_prodi'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- Tambahan Dropdown Semester -->
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Semester</label>
                        <div class="col-sm-9">
                            <select name="semester" class="form-select">
                                <?php
                                for ($i = 1; $i <= 8; $i++) {
                                    echo "<option value='$i'>Semester $i</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jns_kelamin" value="L" class="form-check-input" checked>
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="jns_kelamin" value="P" class="form-check-input">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-9">
                            <textarea name="alamat" rows="4" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="simpan" class="btn btn-primary me-2"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        <button type="reset" name="batal" class="btn btn-warning me-2"><i class="fa-solid fa-xmark"></i> Batal</button>
                        <a href="mahasiswa.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <?php if (isset($pesan)) echo $pesan; ?>
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
</body>

</html>
