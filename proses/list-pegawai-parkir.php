<?php
// include '../koneksi.php';

$query = "SELECT * FROM pegawai WHERE bidang = 'Manajemen Perparkiran'";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data pegawai parkir
$data_parkir = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_parkir[] = $row;
}
?>