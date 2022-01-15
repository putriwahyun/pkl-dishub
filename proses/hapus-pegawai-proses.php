<?php
    include '../koneksi.php';

    $id_pegawai = $_GET['id_pegawai'];

    mysqli_query($db, "DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'");

    header("location:../index.php?p=kelola-pegawai");
?>