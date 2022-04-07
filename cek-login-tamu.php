<?php 
    session_start();
    $_SESSION['sesi'] = NULL;

    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $user = isset($_POST['nama_calon_tamu']) ? $_POST['nama_calon_tamu'] : "";
        $qry = mysqli_query($db, "SELECT * FROM calontamu WHERE nama_calon_tamu = '$user'");
        $sesi = mysqli_num_rows($qry);

        if ($sesi == 1) {
            $data_calon_tamu = mysqli_fetch_array($qry);
            $_SESSION['id_calon_tamu'] = $data_calon_tamu['id_calon_tamu'];
            $_SESSION['sesi'] = $data_calon_tamu['nama_calon_tamu'];

            // echo "<script>alert('Anda berhasil Log In');</script>";
            echo "<meta http-equiv='refresh' content='0; url=../header-tamu.php?pt=tamu'>";
        } else {
            extract($_POST);

            $query = mysqli_query($db, "SELECT id_calon_tamu AS id FROM calontamu ORDER BY id_calon_tamu DESC LIMIT 1");
            $id = mysqli_fetch_array($query);

            $id_calon_tamu = $id['id']+1;

            $sql = "INSERT INTO calontamu VALUES('$id_calon_tamu', '$user')";
            $query = mysqli_query($db, $sql);

            $qry = mysqli_query($db, "SELECT * FROM calontamu WHERE nama_calon_tamu = '$user'");
            $sesi = mysqli_num_rows($qry);

            if ($sesi == 1) {
                $data_calon_tamu = mysqli_fetch_array($qry);
                $_SESSION['id_calon_tamu'] = $data_calon_tamu['id_calon_tamu'];
                $_SESSION['sesi'] = $data_calon_tamu['nama_calon_tamu'];
    
                // echo "<script>alert('Anda berhasil Log In');</script>";
                echo "<meta http-equiv='refresh' content='0; url=../header-tamu.php?pt=tamu'>";
            }
        }
    } else {
        include "logintamu.php";
    }
