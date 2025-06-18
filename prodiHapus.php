<?php
include 'koneksi.php';

$kode_prodi = $_GET['kode_prodi'];
$queryHapus = "DELETE FROM tabel_prodi WHERE kode_prodi = '$kode_prodi'";
$resultHapus = mysqli_query($koneksi, $queryHapus);

if ($resultHapus) {
    echo "<script>
        alert('Data prodi berhasil dihapus');
        window.location='prodi.php';
    </script>";
} else {
    echo "<script>
        alert('Data prodi gagal dihapus: " . mysqli_error($koneksi) . "');
        window.location='prodi.php';a
    </script>";
}
?>
