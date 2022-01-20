<?php
// include '../koneksi.php';

$query = "SELECT * FROM pegawai WHERE bidang = 'Lalu Lintas'";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data pegawai lalin
$data_lalin = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_lalin[] = $row;
}
?>