<?php
// include '../koneksi.php';

$query = "SELECT * FROM pegawai WHERE bidang = 'Angkutan'";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data pegawai angkutan
$data_angkutan = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_angkutan[] = $row;
}
?>