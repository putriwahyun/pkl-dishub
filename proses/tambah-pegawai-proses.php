<?php
include '../koneksi.php';

$nama_pegawai = $_POST['nama_pegawai'];
$bidang = $_POST['bidang'];

if (isset($_POST['Submit'])) {
    extract($_POST);

    $sql = "INSERT INTO pegawai VALUES('$id_pegawai', '$nama_pegawai', '$bidang')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=kelola-pegawai");
}
