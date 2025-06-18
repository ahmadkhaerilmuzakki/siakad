<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

<body style="background-color: #0c3d4c;">
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="margin-top: 200px;">
                <h3 align="center" style="margin-top: -80px;margin-bottom:50px;color:white;font-weight:700;font-size:30px">
                    "HALAMAN LOGIN"
                </h3>
                <form id="loginForm"
                    style="border: 1px solid rgb(74, 142, 164); padding:35px;border-radius:20px; background-color:rgb(74, 142, 164)">
                    <div class="mb-3">
                        <label for="username" class="form-label" style="font-weight: 900;">
                            <i class="fa-solid fa-user"></i> USERNAME
                        </label>
                        <input type="text" class="form-control" id="username" placeholder="Nama Pengguna" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="font-weight: 900;">
                            <i class="fa-solid fa-key"></i> PASSWORD
                        </label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                    </div>
                    <p>Belum Punya Akun?
                        <a href="#" style="text-decoration: none;color:black;font-weight:700">
                            <i class="fa-solid fa-wrench"></i> Buat Akun
                        </a>
                    </p>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1" style="font-weight: 900;">Ingat Saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary" style="font-weight: 600;">Login</button>
                    <button type="button" class="btn btn-danger" style="font-weight: 600;" onclick="resetForm()">Batal</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="aos-master/dist/aos.js"></script>

    <script>
        // Validasi form login
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            if (username === '' || password === '') {
                alert("Harap isi semua kolom sebelum login!");
            } else {
                // Redirect ke halaman beranda jika valid
                window.location.href = "beranda.php";
            }
        });

        // Reset form saat klik tombol Batal
        function resetForm() {
            document.getElementById('loginForm').reset();
        }
    </script>
</body>

</html>
