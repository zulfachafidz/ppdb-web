<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB ONLINE | administrator</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
       

  <header>
    <h1><a href="beranda.php"> pendaftaran PPDB</a></h1>
    <ul>
        <li><a href="admin.php">Beranda</a></li>
        <li><a href="daftar_peserta.php">daftar_peserta</a></li>
        <li><a href="tentang.php">tentang</a></li>
        <li><a href="keluar.php">Keluar</a></li>
    </ul>
</header>
    
    <section class="content">
        <h2>daftar nilai</h2>
        <div class="box">
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Id pendaftaran</th>
                        <th>NISN </th>
                        <th>Nama </th>
                        <th>Tanggal lahir </th>
                        <th>Nilai rata-rata raport </th>
                        <th>Jurusan </th>
                        <th>Agama </th>
                        <th>Alamat </th>
                        <th>Jenis kelamin</th>
                        <th>Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "select * from
                        tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_peserta)){
                        ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['tgl_lahir'] ?></td>
                        <td><?php echo $row['raport'] ?></td>
                        <td><?php echo $row['jurusan'] ?></td>
                        <td><?php echo $row['agama'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
                            <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Yakin ?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                <tbody>
            <table>
        </div>
    </section>
</body>
</html>