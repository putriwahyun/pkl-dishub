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

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adding Dropdowns in Bootstrap via Data Attributes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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

                        <!-- Nav Item - User Information -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        
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