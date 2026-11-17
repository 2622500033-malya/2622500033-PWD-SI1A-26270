<?php
$namaMahasiswa= "Malya Nadha Janeeta";
$nimMahasiswa = "2622500033";
$programStudi = "Sistem Informasi";
$tempatTanggalLahir = "Pangkalpinang, 29 Mei 2008";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2622500033_Malya Nadha Janeeta_SI1A</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1> Sanggar Tarian Bangka Belitung</h1>
    </div>
    <div id="menu">
        <a href="index.php">Home</a>
        <a href="profil.php">Profil</a>
        <a href="tentang.php">Tentang</a>
        <a href="registrasi.php">Registrasi</a>
    </div>
    <div id="isi">
        <h2>Biodata Diri</h2>
        <div class="makanan">
            <img src="./foto.jpeg" width="100px" height="100px">
            <p>Nama : <?php echo $namaMahasiswa; ?></p>
            <p>Tempat Tanggal Lahir :  <?php echo $tempatTanggalLahir; ?></p>
            <p>Agama :  <?php echo $agama; ?></p>
            <p>Alamat : <?php echo $alamat; ?></p>
        </div>
    </div>
    <div id="footer">
        2622500033_Malya Nadha Janeeta_SI1A_UTS Pemrograman Web Dasar
    </div>
</body>
</html>