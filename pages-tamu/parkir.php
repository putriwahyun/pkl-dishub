<?php
include 'proses/list-pegawai-parkir.php';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="true">
    <title>Dashboard Janji Temu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/assets/favicon.ico" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="asset/css/styles.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>
    <div class="container mb-5 mt-5 col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="proses/tambah-janjitemu-proses.php" method="post">
                    <div class="row">
                        <div>
                            <select class="form-select mb-3" aria-label="Default select example" name="nama_pegawai_dituju">
                                <?php foreach ($data_parkir as $parkir) : ?>
                                    <option value="<?= $parkir['nama_pegawai'] ?>"> <?php echo $parkir['nama_pegawai']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nama Tamu</label>
                            <input type="text" name="nama_tamu" value="<?= $_SESSION['sesi'] ?>" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Asal Instansi</label>
                            <input type="text" name="instansi" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Pilih Tanggal</label>
                            <input type="date" name="tanggal_janji" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Waktu Temu</label>
                            <input type="time" name="waktu_temu" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Keperluan</label>
                            <textarea class="form-control" name="keperluan" rows="3"></textarea>
                        </div>
                        <button type="submit" name="Submit" class="btn" style="background-color:#003399;color:white;">Simpan</button>
                    </div>
            </div>
        </div>


    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/datatables-demo.js"></script>

</body>

<style type="text/css">

</style>