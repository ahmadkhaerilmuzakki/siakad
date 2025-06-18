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
                      ><i class="fa-solid fa-pen"></i> Pengisisan KRS</a
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
                <a class="nav-link active" aria-current="page" href="login.php"
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
          Form Pengisian KRS
        </div>
        <br />
        <div class="card-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12" align="center">
                <h5 class="card-title">DAFTAR MATAKULIAH YANG DITAWARKAN</h5>
                <br />
                <div class="row mb-4">
                  <label for="inputEmail3" class="col-sm-1 col-form-label"
                    ><i class="fa-solid fa-filter"></i> Filter</label
                  >
                  <label for="inputEmail3" class="col-sm-2 col-form-label">
                    Program Studi :</label
                  >
                  <div class="col-sm-2">
                    <input
                      type="text"
                      class="form-control"
                      id="inputEmail3"
                      placeholder="Teknik Informatika"
                    />
                  </div>
                  <label for="inputEmail3" class="col-sm-1 col-form-label">
                    Kelas :</label
                  >
                  <div class="col-sm-1">
                    <input
                      type="text"
                      class="form-control"
                      id="inputEmail3"
                      placeholder="TI A"
                    />
                  </div>
                  <label for="inputEmail3" class="col-sm-1 col-form-label">
                    Semester :</label
                  >
                  <div class="col-sm-1">
                    <input
                      type="number"
                      class="form-control"
                      id="inputEmail3"
                      placeholder="3"
                    />
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table id="example" class="table table-bordered">
                  <thead class="table-info">
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Matakuliah</th>
                      <th>Dosen</th>
                      <th>Kelas</th>
                      <th>Ruang</th>
                      <th>Centang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>001</td>
                      <td>Pendidikan Agama</td>
                      <td>Ntrl</td>
                      <td>TI A</td>
                      <td>B</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>002</td>
                      <td>Technopreneurship I</td>
                      <td>Dr. Ahmad Fauzi</td>
                      <td>TI A</td>
                      <td>C</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>003</td>
                      <td>Arsitektur dan Organisasi Komputer</td>
                      <td>Dr. Rita Anggraeni</td>
                      <td>TI A</td>
                      <td>D</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>004</td>
                      <td>Struktur Data</td>
                      <td>Prof. Budi Santoso</td>
                      <td>TI A</td>
                      <td>F</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>005</td>
                      <td>Matematika Diskrit</td>
                      <td>Dr. Nina Kusumawati</td>
                      <td>TI A</td>
                      <td>E</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>006</td>
                      <td>Interaksi Manusia dan Komputer</td>
                      <td>Dr. Muhammad Multazam M.Kom</td>
                      <td>TI A</td>
                      <td>F</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>007</td>
                      <td>Sistem Operasi</td>
                      <td>Dr. Andi Pratama</td>
                      <td>TI A</td>
                      <td>B</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>008</td>
                      <td>Bahasa Indonesia</td>
                      <td>Prof. Siti Nurhaliza</td>
                      <td>TI A</td>
                      <td>D</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>009</td>
                      <td>Bahasa Inggris II</td>
                      <td>Dr. Rina Mulyani</td>
                      <td>TI A</td>
                      <td>H</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>010</td>
                      <td>Aljabar Linier</td>
                      <td>Dr. John Doe</td>
                      <td>TI A</td>
                      <td>C</td>
                      <td>
                        <input class="form-check-input" type="checkbox" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br />
            </div>
            <a href="lihatkrs.html" style="margin-left: 1069px"
              ><button
                type="button"
                class="btn"
                style="background-color: #a4bfccde; font-weight: 500"
              >
                <i class="fa-solid fa-floppy-disk"></i>
                Buat KRS
              </button></a
            >
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/datatables.min.js"></script>
    <script>
      new DataTable("#example");
    </script>
  </body>
</html>
