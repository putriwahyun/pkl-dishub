<?php
include '../koneksi.php';

$nama_pegawai = $_POST['nama_pegawai'];
$bidang = $_POST['bidang'];

if (isset($_POST['Submit'])) {
    extract($_POST);

    $query = mysqli_query($db, "SELECT * FROM pegawai WHERE nama_pegawai = '$nama_pegawai'");
    $cek_pegawai = mysqli_num_rows($query);
    
    if ($cek_pegawai > 0) {
        echo '<script language="javascript">
              alert ("Nama Pegawai Sudah Ada!!");
              window.location="../index.php?p=tambah-pegawai";
              </script>';
        exit();
    }
    else{
        //query insert dijalankan
        $sql = "INSERT INTO pegawai VALUES('$id_pegawai', '$nama_pegawai', '$bidang')";
        $query = mysqli_query($db, $sql);

        header("location:../index.php?p=kelola-pegawai");
    }
}
