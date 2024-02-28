<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Ujicoba</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-Light">
                        <div class="text-center">
                            <h5>Daftar Akun Baru</h5>
                        </div>
                        <form action="config/proses_register.php" method="POST">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required>
                            <label class="form-label">Namalengkap</label>
                            <input type="text" name="namalengkap" class="form-control" required>
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>

                            <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
                    </div>
                    </form>
                    <hr>
                    <p>Sudah Punya Akun? <a href="login.php">Login Disini!</a></p>
                    <p>Ingin <a href="index.php">Keluar?</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; Website Ujicoba</p>

    </footer>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</body>

</html>