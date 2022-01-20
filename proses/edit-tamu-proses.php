<?php 
    include '../koneksi.php';

    $id_tamu = $_POST['id_tamu'];
    $tanggal = $_POST['tanggal'];
    $nama_tamu = $_POST['nama_tamu'];
    $instansi = $_POST['instansi'];
    $keperluan = $_POST['keperluan'];
    $tandatangan = $_POST['tandatangan'];

    if (isset($_POST['Submit'])) {
        extract($_POST);
        mysqli_query($db, "UPDATE tamu
                            SET id_tamu='$id_tamu', tanggal='$tanggal', nama_tamu='$nama_tamu', instansi='$instansi', 
                            keperluan='$keperluan'
                            WHERE id_tamu = '$id_tamu'");

        header("location:../index.php?p=riwayat");
    }
?>