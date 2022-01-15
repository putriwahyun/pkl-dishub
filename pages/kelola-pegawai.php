<head>
    <title>Kelola Pegawai</title>
</head>

<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Pegawai</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <a href="index.php?p=tambah-pegawai" type="button" class="btn btn-primary mb-3">
                    Tambah Pegawai
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Bidang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $query = "SELECT * FROM pegawai";
                            $q_tampil_pegawai = mysqli_query($db, $query);

                            if (mysqli_num_rows($q_tampil_pegawai) > 0) {
                                while ($r_tampil_pegawai = mysqli_fetch_array($q_tampil_pegawai)) {
                            ?>
                                    <tr>
                                        <td><?php echo $nomor; ?></td>
                                        <td><?php echo $r_tampil_pegawai['nama_pegawai']; ?></td>
                                        <td><?php echo $r_tampil_pegawai['bidang']; ?></td>
                                        <td>
                                            <a href="index.php?p=edit-pegawai&id_pegawai=<?php echo $r_tampil_pegawai['id_pegawai']; ?>"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn"><a href="proses/hapus-pegawai-proses.php?id_pegawai=<?php echo $r_tampil_pegawai['id_pegawai']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="tombol"><i class="fa fa-trash mr-3" aria-hidden="true"></i></a></button>
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

</body>