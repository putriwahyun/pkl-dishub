<?php
$id_tamu = $_GET['id_tamu'];
$q_tampil_tamu = mysqli_query($db, "SELECT * FROM tamu WHERE id_tamu = '$id_tamu'");
$r_tampil_tamu = mysqli_fetch_array($q_tampil_tamu);
?>

<head>
    <title>Edit Tamu</title>

    <!-- Signature -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="asset/js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="asset/css/jquery.signature.css">


    <!-- Style Signature -->
    <style>
        .kbw-signature {
            width: 385px;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
    </style>

</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Tamu</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <form class="row g-3" action="proses/edit-tamu-proses.php" method="POST">
                            <div class="col-md-4 mb-3">
                                <label for="inputEmail4" class="form-label">Id Tamu</label>
                                <input type="text" name="id_tamu" class="form-control" value="<?php echo $r_tampil_tamu['id_tamu']; ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="inputEmail4" class="form-label">Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" value="<?php echo $r_tampil_tamu['tanggal']; ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="inputEmail4" class="form-label">Nama</label>
                                <input type="text" name="nama_tamu" class="form-control" value="<?php echo $r_tampil_tamu['nama_tamu']; ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="inputEmail4" class="form-label">Instansi</label>
                                <input type="text" name="instansi" class="form-control" value="<?php echo $r_tampil_tamu['instansi']; ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Keperluan</label>
                                <textarea class="form-control" name="keperluan" rows="3"><?php echo $r_tampil_tamu['keperluan']; ?></textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="" for="">Tanda Tangan:</label>
                                <br />
                                <img src="<?php echo $r_tampil_tamu['tandatangan']; ?>" style="padding-bottom: 150px;">
                                <br />
                                <br>
                                <button type="submit" name="Submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

</body>

</html>