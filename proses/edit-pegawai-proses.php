<?php 
    include '../koneksi.php';

    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $bidang = $_POST['bidang'];

    if (isset($_POST['Submit'])) {
        extract($_POST);

        mysqli_query($db, "UPDATE pegawai
                            SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', bidang='$bidang'
                            WHERE id_pegawai = '$id_pegawai'");

        header("location:../index.php?p=kelola-pegawai");
    }
?>