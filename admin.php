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

    <!--bagian content-->
    <section class="content">
        <h2>beranda</h2>
        <div class="box">
            <h3>selamat datang di PPDB online</h3>
        </div>
    </section>
    <?php
    if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
            case 'beranda':
                include "beranda.php";
                break;
			case 'daftar_peserta':
				include "daftar_peserta.php";
				break;
            case 'daftar_nilai':
                include "daftar_nilai.php";
                break;
            }}
    ?>
</body>
</html>