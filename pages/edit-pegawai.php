<?php
$id_pegawai = $_GET['id_pegawai'];
$q_tampil_pegawai = mysqli_query($db, "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'");
$r_tampil_pegawai = mysqli_fetch_array($q_tampil_pegawai);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Pegawai</title>
</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Pegawai</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="proses/edit-pegawai-proses.php" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Id Pegawai</label>
                        <div class="col-sm-10">
                            <input class="form" type="text" name="id_pegawai" value="<?php echo $r_tampil_pegawai['id_pegawai']; ?>" style="height:100%; width:60%;" aria-label="default input example" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form" type="text" name="nama_pegawai" value="<?php echo $r_tampil_pegawai['nama_pegawai']; ?>" style="height:100%; width:60%;" aria-label="default input example">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bidang</label>
                        <div class="col-sm-10">
                            <div class="dropdown">
                                <?php
                                    if ($r_tampil_pegawai['bidang'] == "Sekretariat") {
                                        echo "<select class='form-select form-select-lg mb-3' name='bidang' style='width:60%;height:38px' type='button' data-bs-toggle='dropdown' aria-label='.form-select-lg example'>
                                        <option value='Sekretariat' selected>Sekretariat</option>
                                        <option value='Lalu Lintas'>Lalu Lintas</option>
                                        <option value='Angkutan'>Angkutan</option>
                                        <option value='Manajemen Perparkiran'>Manajemen Perparkiran</option>
                                        <option value='UPT. Pengelolaan Prasarana Perhubungan'>UPT. Pengelolaan Prasarana Perhubungan</option>
                                        </select>";
                                    } elseif ($r_tampil_pegawai['bidang'] == "Lalu Lintas") {
                                        echo "<select class='form-select form-select-lg mb-3' name='bidang' style='width:60%;height:38px' type='button' data-bs-toggle='dropdown' aria-label='.form-select-lg example'>
                                        <option value='Sekretariat'>Sekretariat</option>
                                        <option value='Lalu Lintas' selected>Lalu Lintas</option>
                                        <option value='Angkutan'>Angkutan</option>
                                        <option value='Manajemen Perparkiran'>Manajemen Perparkiran</option>
                                        <option value='UPT. Pengelolaan Prasarana Perhubungan'>UPT. Pengelolaan Prasarana Perhubungan</option>
                                        </select>";
                                    } elseif ($r_tampil_pegawai['bidang'] == "Angkutan") {
                                        echo "<select class='form-select form-select-lg mb-3' name='bidang' style='width:60%;height:38px' type='button' data-bs-toggle='dropdown' aria-label='.form-select-lg example'>
                                        <option value='Sekretariat'>Sekretariat</option>
                                        <option value='Lalu Lintas'>Lalu Lintas</option>
                                        <option value='Angkutan' selected>Angkutan</option>
                                        <option value='Manajemen Perparkiran'>Manajemen Perparkiran</option>
                                        <option value='UPT. Pengelolaan Prasarana Perhubungan'>UPT. Pengelolaan Prasarana Perhubungan</option>
                                        </select>";
                                    }  elseif ($r_tampil_pegawai['bidang'] == "Manajemen Perparkiran") {
                                        echo "<select class='form-select form-select-lg mb-3' name='bidang' style='width:60%;height:38px' type='button' data-bs-toggle='dropdown' aria-label='.form-select-lg example'>
                                        <option value='Sekretariat'>Sekretariat</option>
                                        <option value='Lalu Lintas'>Lalu Lintas</option>
                                        <option value='Angkutan'>Angkutan</option>
                                        <option value='Manajemen Perparkiran' selected>Manajemen Perparkiran</option>
                                        <option value='UPT. Pengelolaan Prasarana Perhubungan'>UPT. Pengelolaan Prasarana Perhubungan</option>
                                        </select>";
                                    } elseif ($r_tampil_pegawai['bidang'] == "UPT. Pengelolaan Prasarana Perhubungan") {
                                        echo "<select class='form-select form-select-lg mb-3' name='bidang' style='width:60%;height:38px' type='button' data-bs-toggle='dropdown' aria-label='.form-select-lg example'>
                                        <option value='Sekretariat'>Sekretariat</option>
                                        <option value='Lalu Lintas'>Lalu Lintas</option>
                                        <option value='Angkutan'>Angkutan</option>
                                        <option value='Manajemen Perparkiran'>Manajemen Perparkiran</option>
                                        <option value='UPT. Pengelolaan Prasarana Perhubungan' selected>UPT. Pengelolaan Prasarana Perhubungan</option>
                                        </select>";
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--button-->
                    <div class="row">
                        <div class="col-sm-2 mt-2">
                            <button type="submit" name="Submit" class="btn btn-dark">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>