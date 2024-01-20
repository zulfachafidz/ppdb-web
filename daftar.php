<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    // ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
    $getMaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
    $getMaxidN = mysqli_query($conn, "SELECT MAX(RIGHT(id_nilai, 5)) AS id FROM tb_nilai");
    $d = mysqli_fetch_object($getMaxid);
    $n = mysqli_fetch_object($getMaxidN);
    $generateId = 'P'.date('Y').sprintf("%05s", $d->id+1);
    $generateIdN = 'N'.date('Y').sprintf("%05s", $d->id+1);
    
    // proses insert
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
        '".$generateId."',
        '".date('Y-m-d')."',
        '".$_POST['th_ajaran']."',
        '".$_POST['jurusan']."',
        '".$_POST['NISN']."',
        '".$_POST['asal_sekolah']."',
        '".$_POST['nm_peserta']."',
        '".$_POST['tmp_lahir']."',
        '".$_POST['tgl_lahir']."',
        '".$_POST['jenis_kelamin']."',
        '".$_POST['no_hp']."',
        '".$_POST['agama']."',
        '".$_POST['raport']."',
        '".$_POST['alamat']."',
        '".$_POST['sumber_informasi']."'
        )");
    $insertnilai = mysqli_query($conn, "INSERT INTO tb_nilai VALUES(
            '".$generateIdN."',
            '".$_POST['BINDO']."',
            '".$_POST['MTK']."',
            '".$_POST['IPA']."',
            '".$_POST['BINGG']."'
            )");
    if ($insert){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
    if ($insertnilai){
        echo '<script>window.location="berhasil.php?id='.$generateIdN.'"</script>';}
    }else{
        echo 'huft'.mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB ONLINE</title>
        <link rel="stylesheet" type ="text/css" href="css/daftar.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- bagian box formulir -->
        <section class= "box-formulir">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <h2>Data Diri Calon Siswa </h2>
        <!-- bagian form -->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class= "input-control" name="jurusan">
                                <option value="">-------------  PILIH  -------------</option>
                                <option value="Sastra Indonesia">Sastran Indonesia</option>
                                <option value="Sastra Inggris">Sastran Inggris</option>
                                <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Asisten Keperawatan">Asisten Keperawatan</option>
                                <option value="Teknologi Laboratorium Medik">Teknologi Laboratorium Medik</option>
                                <option value="Farmasi Klinis & Komunitas">Farmasi Klinis & Komunitas</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <table border="0" class="table-form">
                    <tr>
                        <td>Nomor Induk Siswa Nasional</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="NISN" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="asal_sekolah" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_peserta" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" class="input-control" value ="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jenis_kelamin" class="input-control" value ="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="no_hp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class= "input-control" name="agama">
                                <option value="">--------  PILIH  --------</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai rata-rata raport</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="raport" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name ="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Sumber Informasi</td>
                        <td>:</td>
                        <td>
                            <select class= "input-control" name="sumber_informasi">
                                <option value="">Darimana Informasi PPDB didapatkan?</option>
                                <option value="Alumni">Alumni</option>
                                <option value="Siswa Aktiv">Siswa Aktiv</option>
                                <option value="Guru/Karyawan">Guru/Karyawan</option>
                                <option value="Brosur">Brosur</option>
                                <option value="Spanduk">Spanduk</option>
                                <option value="Surat_Kabar">Surat_Kabar</option>
                                <option value="Radio">Radio</option>
                                <option value="Internet">Internet</option>
                                <option value="sosial_media">sosial_media</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <h2>Nilai Raport</h2>
            <div class="box">
                <table border="1" style="margin-left:auto;margin-right:auto" >
                    <tr>
                        <th width="200px">Mata Pelajaran</th>
                        <th width="100px">Nilai</th>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>
                            <input type="number" name="BINDO">
                        </td>
                    </tr>
                    <tr>
                        <td>Matematika</td>
                        <td>
                            <input type="number" name="MTK">
                        </td>
                    </tr>
                    <tr>
                        <td>Ilmu Pendidikan Alam</td>
                        <td>
                            <input type="number" name="IPA">
                        </td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td>
                            <input type="number" name="BINGG">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="box">
                <table border="0" class="submit">
                    <tr>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>        
        </form>
        </section>
    </body>
</html>