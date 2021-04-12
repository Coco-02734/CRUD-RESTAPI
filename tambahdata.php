<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_POST['kode'];
    $matakuliah = $_POST['matakuliah'];
    $sks = $_POST['sks'];
    $nilai_angka = $_POST['nilai_angka'];
    $nilai_huruf = $_POST['nilai_huruf'];
    $predikat = $_POST['predikat'];

    $sql = "INSERT INTO khs(kode,matakuliah,sks,nilai_angka,nilai_huruf,predikat)VALUES('$kode','$matakuliah','$sks','$nilai_angka','$nilai_huruf','$predikat')";
    mysqli_query($koneksi, $sql);
    mysqli_close($koneksi);
}
