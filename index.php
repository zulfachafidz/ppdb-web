<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Pendaftarn Peserta Didik Baru</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<section class="header">
    <nav>
        <a href="index.php"><img src="img/logo2.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
             <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="login.php">ADMIN</a></li>
                <li><a href="daftar.php">DAFTAR</a></li>
                <li><a href="#">ABOUT US</a></li>
             </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

<div class="text-box">
    <h1>SELAMAT DATANG DI SMK BINUSVI</h1>
    <p>Sekolah inspirasi masa depan<br>Masa depan cerah hiduppun indah</p>
    <a href="daftar.php" class="hero-btn">Ayo Daftar</a>
</div>    

</section>

<!----- Course ----->

<section class="course">
    <h1>JURUSAN YANG TERSEDIA</h1>
    <p>Bebarapa jurusan yang tersedia di sekolah kami</p>

    <div class="row">
        <div data-aos="fade-up" data-aos-duration="1000" class="course-col">
            <h3>SASTRA</h3>
            <p>Sastra mempelajari bentuk karya cipta atau fiksi yang bersifat imajinatif dan menggunakan bahasa yang indah serta keberadaannya dapat berguna untuk hal-hal lain.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1500" class="course-col">
            <h3>TEKNIK</h3>
            <p>Teknik merupakan suatu prosedur yang rasional agar komponen yang saling berkaitan dapat menjadi satu kesatuan. Selanjutnya, teknik memiliki kegunaan untuk membantu mencapai tujuan yang sudah direncanakan.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="course-col">
            <h3>KESEHATAN</h3>
            <p>Jurusan kesehatan mempelaari tentang bagaimana kita bisa belajar mengenai prosedur yang berhubungan dengan kesehatan dan juga kedokteran juga</p>
        </div>
    </div>


</section>

<!----- campus ----->

<section class="campus">
    <h1>SMK NASIONAL KAMI</h1>
    <p>Beberapa SMK kami yang berada diberbagai temoat </p>

    <div class="row">
        <div class="campus-col">
            <img src="img/london.png">
            <div class="layer">
                <h3>BATAM</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="img/washington.png">
            <div class="layer">
                <h3>GORONTALO</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="img/newyork.png">
            <div class="layer">
                <h3>BALI</h3>
            </div>
        </div>
    </div>

</section>

<!----- Facility ----->

<section class="facilities">
    <h1>FASILITAS KAMI</h1>
    <p>Beberapa fasilitas yang ada di sekolah kami</p>

    <div class="row">
        <div class="facilities-col">
            <img src="img/library.png">
            <h3>Perpustakaan Masa Depan</h3>
            <p>Tersedia berbagai macam buku untuk mencari referensi</p>
        </div>
        <div class="facilities-col">
            <img src="img/basketball.png">
            <h3>Lapangan Luas</h3>
            <p>Lapangan multifungsi yang bisa digunakan untuk berbagai aktifitas</p>
        </div>
        <div class="facilities-col">
            <img src="img/cafeteria.png">
            <h3>Kafetaria</h3>
            <p>Terdapat berbagai macam makanan yang tersedia untuk dinikmati</p>
        </div>
    </div>


</section>

<!----- testimonial ----->

<section class="testimonials">
    <h1>PENDAPAT DARI SISWA KAMI</h1>
    <p>Dapat melihat event atau jadwal apa saja yang ada di lapangan futsal</p>

    <div class="row">
        <div class="testimonials-col">
            <img src="img/user1.jpg" alt="">
            <div>
                <p>Fasilitas yang tersedia di sekolah ini sangat lengkap dan bisa menunjang dalam kegiatan belajar mengajar agar berjalan secara baik</p>
                <h3>Ria Indriyani</h3>
            </div>
        </div>
        <div class="testimonials-col">
            <img src="img/user2.jpg" alt="">
            <div>
                <p>Pengajar di sekolah ini memiliki kualitas yang sangat bagus dan pembelajaran disampaikan secara menarik</p>
                <h3>Egi Hidayatullah</h3>
            </div>
        </div>
    </div>

</section>

<!----- Call To Action ----->

<section class="cta">
    <h1>Gabung sekarang bersama kami<br>Nikmati fasilitas terbaiknya</h1>
    <a href="daftar.php" class="hero-btn">DAFTAR SEKARANG</a>
</section>

<!----- Footer ----->

<section class="footer">
    <h4>Tentang Kami</h4>
    <p>Kunjungi kami melalui instagram @smk_binusvi<br>Lokasi Jl. Pegangsaan Timur No. 86</p>
</section>








<!-------JavaScript for Toggle Menu-------->
<script>

    var navLinks =  document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }


</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>