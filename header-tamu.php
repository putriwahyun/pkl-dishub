<?php
session_start();

include 'koneksi.php';

if (isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])) {
?>
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
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Head -->
                <img src="asset/img/logo.png" width="50" style="margin:10px">
                <h5 class="text-white">Dinas Perhubungan Kota Malang</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="header-tamu.php?pt=buatjanji">Buat Janji Temu</a></li>
                        <li class="nav-item"><a class="nav-link" href="header-tamu.php?pt=janjitemusaya">Janji Temu Saya</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout-tamu.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['sesi'] ?></span>
                                <img class="img-profile rounded-circle" style="width:30px;" src="asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout-tamu.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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

        <section class="home-section">
            <?php
            $pages_dir = 'pages-tamu';
            if (!empty($_GET['pt'])) {
                $pages_tamu = scandir($pages_dir, 0);
                unset($pages_tamu[0], $pages_tamu[1]);

                $pt = $_GET['pt'];
                if (in_array($pt . '.php', $pages_tamu)) {
                    include($pages_dir . '/' . $pt . '.php');
                } else {
                    echo 'Halaman Tidak Ditemukan';
                }
            } else {
                include($pages_dir . '/tamu.php');
            }
            ?>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="asset/vendor/jquery/jquery.min.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="asset/js/sb-admin-2.min.js"></script>

        

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

<?php
} else {
    echo "<script>alert('Anda Harus Login Dahulu!');</script>";
    header('location:logintamu.php');
}
?>