<?php
    session_start();
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "select * from tb_pendaftaran where id_pendaftaran =  '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB ONLINE | administrator</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="content">
        <h2>detail peserta</h2>
        <div class="box">
        <table class="table-data" border="0" >
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo $p->id_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td><?php echo $p->th_ajaran ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $p->jurusan ?></td>
            </tr>
            <tr>
                <td>Nomor Induk Siswa Nasional</td>
                <td>:</td>
                <td><?php echo $p->NISN ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><?php echo $p->asal_sekolah ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo $p->nm_peserta ?></td>
            </tr>
            <tr>
                <td>Tempat,Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $p->tmp_lahir.','.$p->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $p->jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><?php echo $p->no_hp ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $p->agama ?></td>
            </tr>
            <tr>
                <td>Nilai rata-rata raport</td>
                <td>:</td>
                <td><?php echo $p->raport ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
       </table>
        </div>
    </section>
</body>
</html>