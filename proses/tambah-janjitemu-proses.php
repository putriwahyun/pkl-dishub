<?php
include '../koneksi.php';

$nama_pegawai_dituju = $_POST['nama_pegawai_dituju'];
$nama_tamu = $_POST['nama_tamu'];
$instansi = $_POST['instansi'];
$tanggal_janji = $_POST['tanggal_janji'];
$waktu_temu = $_POST['waktu_temu'];
$no_telp = $_POST['no_telp'];
$keperluan = $_POST['keperluan'];
$keterangan = 'Menunggu';

if (isset($_POST['Submit'])) {
    extract($_POST);

    $sql = "INSERT INTO janjitemu VALUES('$id_janji_temu', '$nama_pegawai_dituju', '$nama_tamu', 
            '$instansi', '$tanggal_janji', '$waktu_temu', '$no_telp', '$keperluan', '$keterangan')";
    $query = mysqli_query($db, $sql);

    header("location:../header-tamu.php?pt=janjitemusaya");
}
