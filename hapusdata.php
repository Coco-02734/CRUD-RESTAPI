<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM khs WHERE id='$id'";

    $cek = mysqli_query($koneksi, $sql);
    if ($cek) {
        echo "ok";
    } else {
        echo "gagal";
    }
    mysqli_close($koneksi);
}
