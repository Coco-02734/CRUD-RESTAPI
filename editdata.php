<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $matakuliah = $_POST['matakuliah'];
    $sks = $_POST['sks'];
    $nilai_angka = $_POST['nilai_angka'];
    $nilai_huruf = $_POST['nilai_huruf'];
    $predikat = $_POST['predikat'];

    $sql = "UPDATE khs SET kode='$kode', matakuliah='$matakuliah', sks='$sks',
            nilai_angka='$nilai_angka', nilai_huruf='$nilai_huruf', predikat='$predikat' WHERE id='$id'";

    $cek = mysqli_query($koneksi, $sql);
    // if ($cek) {
    //     echo "ok";
    // } else {
    //     echo "gagal";
    // }
    mysqli_close($koneksi);
}
