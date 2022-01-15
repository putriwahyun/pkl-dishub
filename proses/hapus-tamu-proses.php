<?php
    include '../koneksi.php';

    $id_tamu = $_GET['id_tamu'];

    mysqli_query($db, "DELETE FROM tamu WHERE id_tamu = '$id_tamu'");

    header("location:../index.php?p=riwayat");
?>