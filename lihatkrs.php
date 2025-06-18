<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
                                aria-expanded="false"><i class="fa-solid fa-file-lines"></i>
                                KRS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i>
                                        Pengisisan KRS</a>
                                </li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat
                                        KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal
                                Perkuliahan</a>
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
        <div class="card">
            <div class="card-header" style="background-color: #a4bfccde;" align="center">
                Kartu Rencana Studi
            </div>
            <br>

            <div class="card-body">
                <div class="container-fluid">
                    <div class="row" style="margin-left: 20px;">
                        <br>

                        <div class="col-12" align="center">
                            <h5 class="card-title" style="font-weight: 800;color:#484848de">KARTU RENCANA STUDI (KRS)
                            </h5>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6" style="padding-left:10px">
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Nama</strong></div>
                                <div class="col-5">: Ahmad Khaeril Muzakki</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>NIM</strong></div>
                                <div class="col-5">: 23TI023</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Jurusan</strong></div>
                                <div class="col-5">: S1-Teknik Informatika</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Semester</strong></div>
                                <div class="col-5">: 4 (Tiga)</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Kelas</strong></div>
                                <div class="col-5">: 23 TI A</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Tahun Akademik</strong></div>
                                <div class="col-5">: 2024 / 2025</div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="col-3"><strong>Dosen Wali</strong></div>
                                <div class="col-7">: Dr. Muhammad Multazam, S.Kom., M.Kom</div>
                            </div>
                            <br><br><br>
                        </div>
                        <div class="col-6" align="center">
                            <img src="img/pp2.png" alt="" style="width: 200px;border-radius:20px">
                            <br><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" align="center">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">No</li>
                                <li class="list-group-item">1</li>
                                <li class="list-group-item">2</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">4</li>
                                <li class="list-group-item">5</li>
                                <li class="list-group-item">6</li>
                                <li class="list-group-item">7</li>
                            </ul>
                        </div>
                        <div class="col-2" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">Kode</li>
                                <li class="list-group-item">001</li>
                                <li class="list-group-item">002</li>
                                <li class="list-group-item">003</li>
                                <li class="list-group-item">004</li>
                                <li class="list-group-item">005</li>
                                <li class="list-group-item">006</li>
                                <li class="list-group-item">007</li>
                            </ul>
                        </div>
                        <div class="col-6" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">Matakuliah</li>
                                <li class="list-group-item">Pendidikan Agama</li>
                                <li class="list-group-item">Technopreneurship I </li>
                                <li class="list-group-item">Arsitektur dan Organisasi Komputer </li>
                                <li class="list-group-item">Struktur Data </li>
                                <li class="list-group-item">Matematika Diskrit </li>
                                <li class="list-group-item">Interaksi Manusia dan Komputer </li>
                                <li class="list-group-item">Sistem Operasi </li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">SKS</li>
                                <li class="list-group-item">2</li>
                                <li class="list-group-item">2</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">4</li>
                                <li class="list-group-item">3</li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">SMT</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                                <li class="list-group-item">3</li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true"
                                    style="background-color: #a4bfccde;border-color:#a4bfccde">Ruang</li>
                                <li class="list-group-item">B</li>
                                <li class="list-group-item">C</li>
                                <li class="list-group-item">D</li>
                                <li class="list-group-item">F</li>
                                <li class="list-group-item">E</li>
                                <li class="list-group-item">F</li>
                                <li class="list-group-item">B</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9" style="width:897px">
                            <ul class="list-group">
                                <li class="list-group-item" style="padding-left: 400px;font-weight:800;color:#484848de">
                                    Total SKS</li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item">20</li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item">.</li>
                            </ul>
                        </div>
                        <div class="col-1" style="margin-left: -25px;">
                            <ul class="list-group">
                                <li class="list-group-item">.</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="row" align="center">
                        <div class="col-7"></div>
                        <div class="col-5">
                            <p>Mataram,25 Januari 2025</p>
                            <p style="margin-top: -18px;">Mahasiswa Yang Bersangkutan,</p>
                            <br><br><br>
                            <h5>(Ahmad Khaeril Muzakki)</h5>
                            <p style="margin-top: -10px;">NPM. 23TI023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
</body>

</html>