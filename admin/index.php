<?php
session_start();
if ($_SESSION['status'] != 'login') {
  echo "<script>
    alert('Anda belum login!');
    </script>";
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>website ujicoba</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="index.php">website ujicoba</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarNav">
        <div class="navbar-nav me-auto">
        </div>
        <a href="home.php" class="btn btn-outline-secondary m-1">Home</a>
        <a href="album.php" class="btn btn-outline-secondary m-1">Album</a>
        <a href="foto.php" class="btn btn-outline-secondary m-1">Foto</a>
      </div>
    </div>
  </nav>




  <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; Website Ujicoba</p>

  </footer>

  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>