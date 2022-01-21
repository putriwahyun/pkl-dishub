<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Pegawai</title>
</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tambah Pegawai</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="proses/tambah-pegawai-proses.php" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input class="form" type="text" name="nama_pegawai" style="height:100%; width:60%;" aria-label="default input example">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Bidang</label>
                        <div class="col-sm-10">
                            <div class="dropdown">
                                <select class="form-select form-select-lg mb-3" name="bidang" style="width:60%;height:50px" type="button" data-bs-toggle="dropdown" aria-label=".form-select-lg example">
                                    <option selected disabled hidden>Pilih Bidang</option>
                                    <option class="dropdown-item" value="Sekretariat">Sekretariat</option>
                                    <option class="dropdown-item" value="Lalu Lintas">Lalu Lintas</option>
                                    <option class="dropdown-item" value="Angkutan">Angkutan</option>
                                    <option class="dropdown-item" value="Manajemen Perparkiran">Manajemen Perparkiran</option>
                                </select>
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