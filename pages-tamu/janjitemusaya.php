<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="true">
    <title>Janji Temu Saya</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/assets/favicon.ico" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="asset/css/styles.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>
    <!-- Page content-->
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Menemui</th>
                                    <th>Bidang</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Asal Instansi</th>
                                    <th>Keperluan</th>
                                    <th>No Telepon</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                $nama_tamu = $_SESSION['sesi'];
                                $query = "SELECT * FROM janjitemu WHERE nama_tamu LIKE '%$nama_tamu%'";
                                $q_tampil_janji_temu = mysqli_query($db, $query);

                                if (mysqli_num_rows($q_tampil_janji_temu) > 0) {
                                    while ($r_tampil_janji_temu = mysqli_fetch_array($q_tampil_janji_temu)) {
                                ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['nama_pegawai_dituju']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['bidang']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['tanggal_janji']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['waktu_temu']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['instansi']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['keperluan']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['no_telp']; ?></td>
                                            <td><?php echo $r_tampil_janji_temu['keterangan']; ?></td>
                                        </tr>
                                <?php
                                        $nomor++;
                                    }
                                } else {
                                    echo "";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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

</html>