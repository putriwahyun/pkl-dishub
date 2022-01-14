<?php
include '../koneksi.php';

$tgl = date('d-m-Y');

$nama_tamu = $_POST['nama_tamu'];
$instansi = $_POST['instansi'];
$keperluan = $_POST['keperluan'];
$tandatangan = $_POST['tandatangan'];

if (isset($_POST['Submit'])) {
    extract($_POST);

    $folderPath = "../asset/tandatangan/";
    if (empty($_POST['tandatangan'])) {
        $tandatangan = "-";
    } else {
        $image_parts = explode(";base64,", $_POST['tandatangan']);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $tandatangan = $folderPath . $nama_tamu . '.' . $image_type;
        file_put_contents($tandatangan, $image_base64);
    }

    $sql = "INSERT INTO tamu VALUES('$id_tamu', '$tgl','$nama_tamu', '$instansi', '$keperluan', '$tandatangan')";
    $query = mysqli_query($db, $sql);

    header("location:../index.php?p=riwayat");
}
