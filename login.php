<html lang="en>
<div class=" container py-5">
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body bg-light">
                <div class="text-center">
                    <h5>Login</h5>
                </div>
                <form action="config/proses_login.php" method="POST">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <div class="d-grid mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
                    </div>
                </form>
                <hr>
                <p>Belum Punya Akun? <a href="register.php">Daftar Disini!</a></p>
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