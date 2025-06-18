<?php
include "koneksi.php";
$nidn = $_GET['nidn'];

$queryEdit = "SELECT * FROM tabel_dosen WHERE nidn = '$nidn'";
$resultEdit = mysqli_query($koneksi, $queryEdit);
$dataEdit = mysqli_fetch_array($resultEdit);

if (isset($_POST['ubah'])) {
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $jk      = $_POST['jns_kelamin'];
    $telpon  = $_POST['telpon'];
    $pesan   = "";

    $query = "UPDATE tabel_dosen SET 
                nama = '$nama',
                email = '$email',
                jns_kelamin = '$jk',
                telpon = '$telpon'
              WHERE nidn = '$nidn'";
              
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesan .= "<div align='center' style='color:green;'>Data berhasil diubah</div>";
    } else {
        $pesan .= "<div align='center' style='color:red;'>Data gagal diubah</div>";
        $pesan .= mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
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
    <div class="container">
        <nav class="navbar navbar-expand-lg" style="background-color: #a4bfcc81;border-radius:15px">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/utm.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-text-center"
                        style="border-radius: 20px;">
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
                            <a class="nav-link active" aria-current="page" href="beranda.php"><i
                                    class="fa-solid fa-house"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="khs.php"><i class="fa-solid fa-file"></i> KHS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa-solid fa-file-lines"></i> KRS</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i> Pengisisan KRS</a></li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.php"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button class="btn btn-outline-info" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>

        <br>
        <div class="card shadow">
            <div class="card-header text-center bg-info text-white">
                <h4>Edit Biodata Dosen</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <table align="center" width="80%" class="table table-borderless">
                        <tr>
                            <td><label class="form-label">NIDN</label></td>
                            <td><input type="text" name="nidn" class="form-control" size="15" value="<?php echo $dataEdit['nidn']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td><label class="form-label">Nama</label></td>
                            <td><input type="text" name="nama" class="form-control" size="30" value="<?php echo $dataEdit['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label class="form-label">Email</label></td>
                            <td><input type="email" name="email" class="form-control" size="30" value="<?php echo $dataEdit['email']; ?>"></td>
                        </tr>
                        <tr>
                            <td><label class="form-label">Jenis Kelamin</label></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jns_kelamin" value="L" <?php if($dataEdit['jns_kelamin']=="L") echo "checked"; ?>>
                                    <label class="form-check-label">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jns_kelamin" value="P" <?php if($dataEdit['jns_kelamin']=="P") echo "checked"; ?>>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="form-label">Telepon</label></td>
                            <td><input type="text" name="telpon" class="form-control" size="15" value="<?php echo $dataEdit['telpon']; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                                <button type="reset" name="batal" class="btn btn-warning">BATAL</button>
                                <a href="dosen.php" class="btn btn-secondary">Kembali</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <?php if (isset($pesan)) echo $pesan; ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
</body>

</html>
