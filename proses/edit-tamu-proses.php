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

        $folderPath = "../asset/tandatangan/";
    if (empty($_POST['tandatangan'])) {
        mysqli_query($db, "UPDATE tamu
                            SET id_tamu='$id_tamu', tanggal='$tanggal', nama_tamu='$nama_tamu', instansi='$instansi', 
                            keperluan='$keperluan'
                            WHERE id_tamu = '$id_tamu'");

        header("location:../index.php?p=riwayat");
    } else {
        $image_parts = explode(";base64,", $_POST['tandatangan']);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $tandatangan = $folderPath . $nama_tamu . '.' . $image_type;
        file_put_contents($tandatangan, $image_base64);

        mysqli_query($db, "UPDATE tamu
                            SET id_tamu='$id_tamu', tanggal='$tanggal', nama_tamu='$nama_tamu', instansi='$instansi', 
                            keperluan='$keperluan', tandatangan='$tandatangan'
                            WHERE id_tamu = '$id_tamu'");

        header("location:../index.php?p=riwayat");
    }
    }
?>