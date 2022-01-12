<?php
session_start();

include 'koneksi.php';

$tgl = date('Y-m-d');

if (isset($_SESSION['sesi']) && !empty($_SESSION['sesi'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Custom fonts for this template-->
        <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

        <style>
            li a .links_name {
                color: white;
                font-size: 15px;
                font-weight: 400;
                white-space: nowrap;
                opacity: 0;
                pointer-events: none;
                transition: 0.4s;
            }

            li a .links_name {
                opacity: 1;
                pointer-events: auto;
            }

            li a:hover .links_name,
            li a:hover i {
                transition: all 0.5s ease;
                color: #11101D;
            }
        </style>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon">
                        <img src="asset/img/logo.png" width="50">
                    </div>
                    <div class="sidebar-brand-text">Buku Tamu</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=dashboard">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span class="links_name">Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <!-- <div class="sidebar-heading">
                Interface
            </div> -->

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=tambah-tamu">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <span class="links_name">Tambah Tamu</span>
                    </a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=riwayat">
                        <i class="fa fa-history" aria-hidden="true"></i>
                        <span class="links_name">Riwayat Tamu</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['sesi'] ?></span>
                                    <img class="img-profile rounded-circle" src="asset/img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>

                    <section class="home-section">
                        <?php
                        $pages_dir = 'pages';
                        if (!empty($_GET['p'])) {
                            $pages = scandir($pages_dir, 0);
                            unset($pages[0], $pages[1]);

                            $p = $_GET['p'];
                            if (in_array($p . '.php', $pages)) {
                                include($pages_dir . '/' . $p . '.php');
                            } else {
                                echo 'Halaman Tidak Ditemukan';
                            }
                        } else {
                            include($pages_dir . '/dashboard.php');
                        }
                        ?>
                    </section>

                    <!-- End of Topbar -->
                    <!-- Bootstrap core JavaScript-->
                    <script src="asset/vendor/jquery/jquery.min.js"></script>
                    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="asset/js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="asset/vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="asset/js/demo/chart-area-demo.js"></script>
                    <script src="asset/js/demo/chart-pie-demo.js"></script>

    </body>

    </html>
<?php
} else {
    echo "<script>alert('Anda Harus Login Dahulu!');</script>";
    header('location:login.php');
}
?>