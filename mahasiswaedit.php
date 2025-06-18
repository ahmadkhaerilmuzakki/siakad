<?php
include "koneksi.php";
$nim = $_GET['nim'] ?? '';

// Ambil data mahasiswa berdasarkan NIM
$queryEdit = "SELECT * FROM tabel_mahasiswa WHERE nim = '$nim'";
$resultEdit = mysqli_query($koneksi, $queryEdit);
$dataEdit = mysqli_fetch_array($resultEdit);

$pesan = "";

if (isset($_POST['ubah'])) {
    $nama     = $_POST['nama_mhs'];
    $prodi    = $_POST['prodi'];
    $semester = $_POST['semester'];
    $jk       = $_POST['jns_kelamin'];
    $alamat   = $_POST['alamat'];

    // Update data mahasiswa
    $query = "UPDATE tabel_mahasiswa SET 
                nama_mhs = '$nama',
                prodi = '$prodi',
                semester = '$semester',
                jns_kelamin = '$jk',
                alamat = '$alamat'
              WHERE nim = '$nim'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan = "<div class='alert alert-success text-center'>Data berhasil diubah</div>";
    } else {
        $pesan = "<div class='alert alert-danger text-center'>Data gagal diubah: " . mysqli_error($koneksi) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm rounded mb-4" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="rounded-circle">
                    Universitas Teknologi Mataram
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="beranda.php"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="khs.php"><i class="fas fa-file-alt"></i> KHS</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fas fa-file-lines"></i> KRS</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fas fa-pen"></i> Pengisian KRS</a></li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fas fa-eye"></i> Lihat KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-calendar-alt"></i> Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Card -->
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5>Edit Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                <?= $pesan ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="<?= $dataEdit['nim'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                        <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" value="<?= $dataEdit['nama_mhs'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <select name="prodi" id="prodi" class="form-select" required>
                            <?php
                            $queryProdi = "SELECT * FROM tabel_prodi";
                            $resultProdi = mysqli_query($koneksi, $queryProdi);
                            while ($dataprodi = mysqli_fetch_array($resultProdi)) {
                                $selected = ($dataprodi['nama_prodi'] == $dataEdit['prodi']) ? 'selected' : '';
                                echo "<option value='{$dataprodi['nama_prodi']}' $selected>{$dataprodi['nama_prodi']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select name="semester" id="semester" class="form-select" required>
                            <?php
                            for ($i = 1; $i <= 8; $i++) {
                                $selected = ($dataEdit['semester'] == $i) ? "selected" : "";
                                echo "<option value='$i' $selected>Semester $i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jns_kelamin" value="L" class="form-check-input" id="jkL" <?= ($dataEdit['jns_kelamin'] == 'L') ? 'checked' : '' ?>>
                            <label for="jkL" class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jns_kelamin" value="P" class="form-check-input" id="jkP" <?= ($dataEdit['jns_kelamin'] == 'P') ? 'checked' : '' ?>>
                            <label for="jkP" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="3" required><?= $dataEdit['alamat'] ?></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="ubah" class="btn btn-success"><i class="fas fa-save"></i> Simpan Perubahan</button>
                        <a href="mahasiswa.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
