<head>
    <title>Riwayat Tamu</title>
</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Riwayat Tamu</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Keperluan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $query = "SELECT * FROM tamu";
                            $q_tampil_tamu = mysqli_query($db, $query);

                            if (mysqli_num_rows($q_tampil_tamu) > 0) {
                                while ($r_tampil_tamu = mysqli_fetch_array($q_tampil_tamu)) {
                            ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $r_tampil_tamu['tanggal']; ?></td>
                                        <td><?php echo $r_tampil_tamu['nama_tamu']; ?></td>
                                        <td><?php echo $r_tampil_tamu['instansi']; ?></td>
                                        <td><?php echo $r_tampil_tamu['keperluan']; ?></td>
                                        <td>
                                            <a href="index.php?p=edit-tamu&id_tamu=<?php echo $r_tampil_tamu['id_tamu']; ?>"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn"><a href="proses/hapus-tamu-proses.php?id_tamu=<?php echo $r_tampil_tamu['id_tamu']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol"><i class="fa fa-trash mr-3" aria-hidden="true"></i></a></button>
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
            $('#dataTable').DataTable();
        });
    </script>
</body>