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
    <style>
      .add-button {
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        font-weight: bold;
      }
      .add-button:hover {
        background-color: #45a049;
      }
      .add-container {
        width: 90%;
        margin: 20px auto 0 auto;
        text-align: right;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <nav
        class="navbar navbar-expand-lg"
        style="background-color: #a4bfcc81; border-radius: 15px"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="img/utm.jpg"
              alt="Logo"
              width="40"
              height="40"
              class="d-inline-block align-text-center"
              style="border-radius: 20px"
            />
            Universitas Teknologi Mataram
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="beranda.php"
                  ><i class="fa-solid fa-house"></i> Beranda</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="khs.php"
                  ><i class="fa-solid fa-file"></i> KHS</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  ><i class="fa-solid fa-file-lines"></i>
                  KRS
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="isikrs.php"
                      ><i class="fa-solid fa-pen"></i> Pengisian KRS</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="lihatkrs.php"
                      ><i class="fa-solid fa-eye"></i> Lihat KRS</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="fa-solid fa-calendar-days"></i> Jadwal
                  Perkuliahan</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.html"
                  ><i class="fa-solid fa-arrow-right-from-bracket"></i>
                  Keluar</a
                >
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Cari"
                aria-label="Search"
              />
              <button class="btn btn-outline-info" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
      <br />
      <div class="card">
        <div
          class="card-header"
          style="background-color: #a4bfccde"
          align="center"
        >
          Mahasiswa UTM Mataram
        </div>
        <br />
        <table
          id="tabelMahasiswa"
          class="table table-striped table-bordered table-hover"
          style="width: 90%; margin: auto"
          data-aos="fade-up"
        >
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nim</th>
              <th>Nama</th>
              <th>Prodi</th>
              <th>Semester</th>
              <th>Jk</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tabel_mahasiswa";
            $result = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['nim']; ?></td>
              <td><?php echo $data['nama_mhs']; ?></td>
              <td><?php echo $data['prodi']; ?></td>
              <td><?php echo $data['semester']; ?></td>
              <td><?php echo $data['jns_kelamin']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <td>
                <a
                  href="mahasiswaedit.php?nim=<?php echo $data['nim']; ?>"
                  class="btn btn-sm btn-warning"
                  ><i class="fa-solid fa-pen-to-square"></i> Edit</a
                >
                <a
                  href="mahasiswaHapus.php?nim=<?php echo $data['nim']; ?>"
                  class="btn btn-sm btn-danger"
                  onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini.?')"
                  ><i class="fa-solid fa-trash"></i> Delete</a
                >
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

        <div class="add-container">
          <a href="tambahmahasiswa.php" class="add-button"
            >+ Tambah Mahasiswa</a
          >
        </div>
      </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/datatables.min.js"></script>
    <script>
      AOS.init();
      new DataTable("#tabelMahasiswa");
    </script>
  </body>
</html>
