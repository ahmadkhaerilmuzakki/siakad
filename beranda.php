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
        <!-- Navbar -->
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
                            <a class="nav-link active" href="beranda.php"><i class="fa-solid fa-house"></i> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="khs.php"><i class="fa-solid fa-file"></i> KHS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i
                                    class="fa-solid fa-file-lines"></i> KRS</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="isikrs.php"><i class="fa-solid fa-pen"></i>
                                        Pengisian KRS</a></li>
                                <li><a class="dropdown-item" href="lihatkrs.php"><i class="fa-solid fa-eye"></i> Lihat
                                        KRS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-calendar-days"></i> Jadwal Perkuliahan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i> Keluar</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        <button type="button" class="btn btn-outline-info"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>

        <br>

        <!-- Konten Utama -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item" style="background-color: #a4bfccde;">
                        Siakad Dashboard
                    </a>
                    <a href="beranda.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-house"></i> Beranda</a>
                    <a href="mahasiswa.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-graduation-cap"></i> Mahasiswa</a>
                    <a href="dosen.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-chalkboard-user"></i> Dosen</a>
                    <a href="prodi.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-calendar-days"></i> Matakuliah</a>
                    <a href="isikrs.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-pen"></i> Pengisian KRS</a>
                    <a href="lihatkrs.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-eye"></i> Lihat KRS</a>
                    <a href="khs.php" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-file"></i> KHS</a>
                </div>

                <br>

                <div class="list-group">
                    <a href="#" class="list-group-item" style="background-color: #a4bfccde;">
                        Kelas
                    </a>
                    <a href="beranda.html" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-credit-card"></i> TI A</a>
                    <a href="#" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-money-check-dollar"></i> TI B</a>
                    <a href="#" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-money-check"></i> TI C</a>
                    <a href="#" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-money-bill-wave"></i> Manajemen</a>
                    <a href="#" class="list-group-item list-group-item-action"><i
                            class="fa-solid fa-comment-dollar"></i> Sistem Informasi</a>
                </div>
            </div>

            <div class="col-9">
                <h4 class="mt-3 p-3 text-white" style="background: linear-gradient(135deg, #5dade2, #2e86c1); border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
    <i class="fa-solid fa-chart-line"></i> Dashboard Control Panel
</h4>


                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info text-white">
                            <div class="inner">
                                <h3>35</h3>
                                <p>Siswa</p>
                            </div>
                            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success text-white">
                            <div class="inner">
                                <h3>94</h3>
                                <p>Dosen</p>
                            </div>
                            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning text-white">
                            <div class="inner">
                                <h3>1</h3>
                                <p>Admin</p>
                            </div>
                            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger text-white">
                            <div class="inner">
                                <h3>3</h3>
                                <p>Gedung</p>
                            </div>
                            <a href="#" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
            
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="card-title">Bar Chart - Visitor</h6>
                            </div>
                            <div class="card-body">
                                <div id="barChart" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>

                
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h6 class="card-title">Pie Chart - All Visitor</h6>
                            </div>
                            <div class="card-body">
                                <div id="pieChart" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    <center><em style="color: white;">Copyright &copy; 2025 By Ahmad Khaeril Muzakki</em></center>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('barChart', {
            chart: { type: 'column' },
            title: { text: null },
            xAxis: {
                categories: ['04_April', '09_April', '13_April', '20_April', '21_April', '22_April', '27_April'],
            },
            yAxis: { title: { text: 'Jumlah Pengunjung' } },
            series: [
                { name: 'Siswa', data: [3, 4, 3, 5, 2, 3, 4] },
                { name: 'Dosen', data: [8, 7, 8, 9, 6, 4, 9] },
                { name: 'Supervisor', data: [2, 3, 1, 3, 2, 2, 3] }
            ]
        });

        Highcharts.chart('pieChart', {
            chart: { type: 'pie' },
            title: { text: null },
            plotOptions: {
                pie: {
                    innerSize: '50%',
                    dataLabels: { enabled: false }
                }
            },
            series: [{
                name: 'Total',
                data: [
                    { name: 'Siswa', y: 35 },
                    { name: 'Guru', y: 94 },
                    { name: 'Admin', y: 1 },
                    { name: 'Gedung', y: 3 }
                ]
            }]
        });
    </script>
</body>

</html>
