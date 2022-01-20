    <!DOCTYPE html>
    <html lang="en">

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
        <!-- Page header with logo and tagline-->
        <header class="py-3 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Selamat Datang</h1>
                    <h3 class="fw-bolder">di Dinas Perhubungan Kota Malang</1>
                </div>
            </div>
        </header>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Akan Keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" Di Bawah Ini, Jika Anda Yakin Untuk Keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout-tamu.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content-->
        <div class="container mb-5">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner" style="border-radius:5px">
                                <div class="carousel-item active">
                                    <img src="asset/img/hal1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="asset/img/hal3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="asset/img/hal4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Tata Cara-->
                    <div class="card mb-4">
                        <div class="card-header">Tata Cara Membuat Janji Temu</div>
                        <div class="card-body">
                            1. Setelah berhasil masuk, silahkan pilih Menu "Buat Janji Temu" pada bagian atas kanan halaman. <br>
                            2. Pilih bagian yang diinginkan. <br>
                            3. Cari Nama yang ingin ditemui. <br>
                            4. Isi form janji temu dengan benar. <br>
                            5. Kemudian silahkan tekan tombol "Buat Janji" yang ada pada layar. <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer>
            <div class="row">
                <div class="col ml-5 mt-5 mb-5" style="width: 40%;">
                    <div class="div mb-3" style="color: #D3D3D3">
                        KONTAK INFO
                    </div>
                    <table id="table-input">
                        <tr>
                            <td>Telepon </td>
                            <td>: (0341) 491140</td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>: (0341) 411626</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: dishub@malangkota.go.id <br></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td>: https://dishub.malangkota.go.id</td>
                        </tr>
                    </table>
                </div>
                <div class="col mt-5 mb-5" style="width: 40%;">
                    <div class="div mb-3" style="color: #D3D3D3">
                        SOSIAL MEDIA
                    </div>
                    <div class="div">
                        <a href="https://www.instagram.com/dishubmalangkota/">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://twitter.com/dishub_mlgkota">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="https://www.facebook.com/dishub.malang.37">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

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

    <style type="text/css">
        footer {
            font-size: 10pt;
            background-color: #343A40;
            color: #D3D3D3;
            line-height: 30px;
            padding-left: 50px;
            ;
        }

        i {
            display: inline-block;
            margin-right: 10px;
        }
    </style>