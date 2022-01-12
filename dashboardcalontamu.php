<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="true">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Tamu</title>

    <!-- Custom fonts for this template -->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Signature -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="asset/js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="asset/css/jquery.signature.css">

</head>

<body id="page-top">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Page Wrapper -->
    <div id="wrapper">

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

                    <!-- Nav Logo Dishub -->
                    <div class="head text-center">
                        <img src="asset/img/logo.png" width="50">
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dinas Perhubungan Kota Malang</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Menu 1 -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-expanded="false" style="color:blue;">
                                Buat Janji Temu
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                        </li>
                        <!-- Nav Item - Menu 2 -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-expanded="false" style="color:blue;">
                                Janji Temu Saya
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="asset/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card">
                    <div class="card-body" style="height:650px;">
                        <div class="row">
                            <!-- start carousel -->
                            <div class="col-md-8 ml-2">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner" style="border-radius:5px">
                                        <div class="carousel-item active">
                                            <img src="asset/img/hal5.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="asset/img/hal3.png" class="d-block w-100" alt="...">
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
                            <!-- end carousel -->

                            <!-- start tata cara -->
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3" style="width: 26rem;">
                                    <div class="card-body">
                                        <div class="h5 ml-3">
                                            Tata Cara Membuat Janji Temu Dinas Perhungan Kota Malang
                                        </div>
                                        <div class="ml-4" style="text-align:justify">
                                            1. Setelah berhasil masuk, silahkan pilih Menu "Buat Janji Temu" pada bagian atas kanan halaman. <br>
                                            2. Pilih bagian yang diinginkan. <br>
                                            3. Cari Nama yang ingin ditemui. <br>
                                            4. Isi form janji temu dengan benar. <br>
                                            5. Kemudian silahkan tekan tombol "Buat Janji" yang ada pada layar. <br><br>
                                        </div>
                                        <div class="h5 ml-3">
                                            Melihat Status/Riwayat Janji Temu
                                        </div>
                                        <div class="ml-4" style="text-align:justify">
                                            1. Jika sudah membuat janji temu, maka akan tersimpan pada menu "Janji Temu Saya" pada bagian atas kanan halaman. <br>
                                            2. Di dalam menu tersebut terdapat riwayat dan status janji temu. <br>
                                            3. Pada menu tersebut akan tampil status janji temu kepada pihak Dinas Perhubungan Kota Malang. <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tata cara -->
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="row">
                        <div class="col ml-5 mt-5 mb-5" style="width: 50%;">
                            <div class="div mb-3" style="color: #D3D3D3">
                                KONTAK INFO
                            </div>
                            <div>
                                Dinas Perhubungan Kota Malang
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
                        </div>
                        <div class="col mt-5 mb-5" style="width: 50%;">
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

                <!-- Page Heading -->
                <!-- <h1 class="h3 mb-2 text-gray-800">Tambah Tamu</h1> -->

                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    var sig = $('#sig').signature({
                        syncField: '#signature64',
                        syncFormat: 'PNG'
                    });
                    $('#clear').click(function(e) {
                        e.preventDefault();
                        sig.signature('clear');
                        $("#signature64").val('');
                    });
                </script>

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
    .kbw-signature {
        width: 385px;
        height: 200px;
    }

    #sig canvas {
        width: 100% !important;
        height: auto;
    }

    footer {
        font-family: 'Lucida Console';
        font-size: 10pt;
        background-color: #343A40;
        color: white;
        line-height: 30px;
    }

    i {
        display: inline-block;
        margin-right: 10px;
    }

    @media screen and (max-width: 1060px) {
        #primary {
            width: 67%;
        }

        #secondary {
            width: 30%;
            margin-left: 3%;
        }
    }
</style>
<!-- Style Signature -->