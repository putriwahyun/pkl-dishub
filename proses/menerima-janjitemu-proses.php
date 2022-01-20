<?php
    include '../koneksi.php';

    $id_janji_temu = $_GET['id_janji_temu'];
    $keterangan = 'Diterima';

    mysqli_query($db, "UPDATE janjitemu SET keterangan='$keterangan'
                        WHERE id_janji_temu = '$id_janji_temu'");

    header("location:../index.php?p=konfirmasijanjitemu");
?>