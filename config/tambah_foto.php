<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date('Y-m-d');
    $albumid = $_POST['albumid'];
    $userid = $_SESSION['userid'];
    $foto = $_FILES['lokasifile']['name'];
    $tmp = $_FILES['lokasifile']['tmp_name'];
    $lokasi = '../assets/img/';
    $namafoto = rand() . '-' . $foto;

    move_uploaded_file($tmp, $lokasi . $namafoto);

    $sql = mysqli_query($conn, "insert into foto values('','$judulfoto','$deskripsifoto',
    '$tanggalunggah','$namafoto','$albumid','$userid')");

    echo "<script>
        alert('Data berhasil disimpan!');
        location.href='../admin/foto.php';
    </script>";
}
if (isset($_POST['edit'])) {
    $fotoid = $_POST['fotoid'];
    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date('Y-m-d');
    $albumid = $_POST['albumid'];
    $userid = $_SESSION['userid'];
    $foto = $_FILES['lokasifile']['name'];
    $tmp = $_FILES['lokasifile']['tmp_name'];
    $lokasi = '../assets/img/';
    $namafoto = rand() . '-' . $foto;

    if ($foto == null) {
        $sql = mysqli_query($conn, "update foto set judulfoto='$judulfoto', 
        deskripsifoto='$deskripsifoto', tanggalunggah='$tanggalunggah', albumid='$albumid' where fotoid='$fotoid'");
    } else {
        $query = mysqli_query($conn, "select * from foto where fotoid='$fotoid'");
        $data = mysqli_fetch_array($query);
        if (is_file('../asset/img/' . $data['lokasifile'])) {
            unlink('../asset/img/' . $data['lokasifile']);
        }
        move_uploaded_file($tmp, $lokasi . $namafoto);
        $sql = mysqli_query($conn, "update foto set judulfoto='$judulfoto', 
        deskripsifoto='$deskripsifoto', tanggalunggah='$tanggalunggah', lokasifile='$namafoto', albumid='$albumid' where fotoid='$fotoid'");
    }
    echo "<script>
        alert('Data berhasil diperbarui!');
        location.href='../admin/foto.php';
    </script>";
}

if (isset($_POST['hapus'])) {
    $fotoid = $_POST['fotoid'];
    $query = mysqli_query($conn, "select * from foto where fotoid='$fotoid'");
    $data = mysqli_fetch_array($query);
    if (is_file('../assets/img/' . $data['lokasifile'])) {
        unlink('../assets/img/' . $data['lokasifile']);
    }
    $sql = mysqli_query($conn, "delete from foto where fotoid='$fotoid'");
    echo "<script>
    alert('Data berhasil dihapus!');
    location.href='../admin/foto.php';
    </script>";
}