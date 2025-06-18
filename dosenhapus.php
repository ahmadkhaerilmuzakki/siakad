<?php
include 'koneksi.php';

$nidn = $_GET['nidn'];
$queryHapus = "DELETE FROM tabel_dosen WHERE nidn = '$nidn'";
$resultHapus = mysqli_query($koneksi, $queryHapus);

if ($resultHapus) {
    echo "<script>
        alert('Data dosen berhasil dihapus');
        window.location='dosen.php';
    </script>";
} else {
    echo "<script>
        alert('Data dosen gagal dihapus: " . mysqli_error($koneksi) . "');
        window.location='dosen.php';
    </script>";
}
?>
