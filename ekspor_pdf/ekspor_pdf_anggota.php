<?php 
    require ("vendor/autoload.php");
    require ("koneksi.php");

    use Dompdf\Dompdf;

    $query = mysqli_query($db, "SELECT * FROM tamu");

    $html = '<h1 align="center">Daftar Tamu Dinas Perhubungan</h1>';
    $html .= '<table width="100%" border="1" cellspacing="0" cellpadding="2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Instansi</th>
                            <th>Keperluan</th>
                            <th>Tanda Tangan</th>
                        </tr>
                    </thead>
                    <tbody>';

    $nomor = 1;
    while ($val = mysqli_fetch_array($query)) {
        $html .= '<tr>
                        <td align="center">'.$nomor.'</td>
                        <td align="center">'.$val['tanggal'].'</td>
                        <td align="center">'.$val['nama_tamu'].'</td>
                        <td align="center">'.$val['instansi'].'</td>
                        <td align="center">'.$val['keperluan'].'</td>
                        <td align="center"><img src="'.$val['tandatangan'].'" width=70px height=70px></td>
                    </tr>';
        $nomor++;
    }

    $html .= '</tbody></html>';

    $dompdf = new Dompdf();
    
    $dompdf->load_html($html);
    $dompdf->setPaper('a4', 'potrait');
    $dompdf->render();
    $dompdf->stream();
