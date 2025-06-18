<?php
include 'koneksi.php';

$nim = $_GET['nim'];
$queryHapus = "DELETE FROM tabel_mahasiswa WHERE nim = '$nim'";
$resultHapus = mysqli_query($koneksi, $queryHapus);

if ($resultHapus) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location='mahasiswa.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus: " . mysqli_error($koneksi) . "');
        window.location='mahasiswa.php';
    </script>";
}
?>
