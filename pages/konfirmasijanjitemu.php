<head>
    <title>Konfirmasi Janji Temu</title>
</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Janji Temu</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead style="text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Nama Tamu</th>
                                <th>Menemui</th>
                                <th>Bidang</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Asal Instansi</th>
                                <th>Keperluan</th>
                                <th>No Telp</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $query = "SELECT * FROM janjitemu";
                            $q_tampil_janji_temu = mysqli_query($db, $query);

                            if (mysqli_num_rows($q_tampil_janji_temu) > 0) {
                                while ($r_tampil_janji_temu = mysqli_fetch_array($q_tampil_janji_temu)) {
                            ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['nama_tamu']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['nama_pegawai_dituju']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['bidang']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['tanggal_janji']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['waktu_temu']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['instansi']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['keperluan']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['no_telp']; ?></td>
                                        <td><?php echo $r_tampil_janji_temu['keterangan']; ?></td>
                                        <td>
                                            <?php
                                            if ($r_tampil_janji_temu['keterangan'] == 'Menunggu') {
                                                $id_temu = $r_tampil_janji_temu['id_janji_temu'];
                                                echo "<button type='button' class='btn btn-success' style='margin: 5px;'><a href='proses/menerima-janjitemu-proses.php?id_janji_temu=$id_temu' class='tombol' style='text-decoration: none; color:white;'>Diterima</a></button>
                                                <button type='button' class='btn btn-danger' style='margin: 5px;'><a href='proses/menolak-janjitemu-proses.php?id_janji_temu=$id_temu' class='tombol' style='text-decoration: none; color:white;'>Ditolak</a></button>";
                                            }
                                            ?>
                                        </td>
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
    <!-- /.container-fluid -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>