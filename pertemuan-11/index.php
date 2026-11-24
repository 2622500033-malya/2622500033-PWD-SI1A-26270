<?php
#kode setelah 
session_start();

require_once('fungsi.php'); #Penggunaan require_once memastikan berkas tersebut tersedia dan tidak dimuat berulang kali.

// P9: memproses data formulir dan menyimpan ke dalam sesion.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim((string) ($_POST["nama"] ?? ''));
    $email = trim((string) ($_POST["email"] ?? ''));
    $semesterForm = trim((string) ($_POST["semester"] ?? ''));
    $tanggal = trim((string) ($_POST["tanggal"] ?? ''));
    $jenisPesan = trim((string) ($_POST["jenis_pesan"] ?? ''));
     $minat = $_POST["minat"] ?? [];
    $prodi = trim((string) ($_POST["prodi"] ?? ''));
    $pesan = trim((string) ($_POST["pesan"] ?? ''));

// Checkbox dapat mengirimkan lebih dari satu nilai.
   if (!is_array($minat)) {
        $minat = [];
    }

// Menyimpan semua data ke formulir ke dalam satu larik asosiatif di sesion.
    $_SESSION['formData'] = [
      "nama"        => $nama,
      "email"       => $email,
      "semester"    => $semesterForm,
      "tanggal"     => $tanggal,
      "jenis_pesan" => $jenisPesan,
      "minat"       => $minat,
      "prodi"       => $prodi,
      "pesan"       => $pesan,
    ];

// PRG : Mengarahkan kembali ke halaman sebelum menghasilkan keluaran HTML.
    header('Location: index.php#contact');
    exit;
}

// P6: PHP dasar dan pemrograman sisi peladen
// Bagian 1: Variabel dan konstanta
$nim = "2622500033";
$namaMahasiswa = "Malya Nadha Janeeta";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 1;
$ipk = 3.75; 
$statusAktif = true;
$catatanTambahan = null;

const NAMA_MATA_KULIAH ="Pemrograman web Dasar";
const PROFIL_GITHUB = "https://github.com/2622500033-malya/2622500033-PWD-SI1A-26270";

// Bagian 2: operator 
$batasSemester = 7;
$sisaSemester = $batasSemester - $semester;
$semesterValid = $semester >= 1 && $semester <=$batasSemester;
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa"; 

// Bagian 3: Percabangan if-elseif-else
if ($semester < 3){
    $keteranganSemester = "Semester awal";
} elseif ($semester <= 6) {
    $keteranganSemester = "Semester menengah";
} else {
    $keteranganSemester = "Semester akhir";
}
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informatika" : "Lainnya");

// Bagian 4: Percabangan switch-case-default
switch ($programStudi) {
  case "SI":
    $fokusProgramStudi = "Sistem informasi dan proses bisnis";
    break;
  case "TI":
    $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
    break;
  default:
    $fokusProgramStudi = "Belum ditentukan";
}
 
//P7
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['pesanKesalahan'] = $pesanKesalahan;

  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  $_SESSION['semester'] = $semesterForm;
  $_SESSION['tanggal'] = $tanggal;
  $_SESSION['jenis_pesan'] = $jenisPesan;
  $_SESSION['prodi'] = $prodi;
  $_SESSION['minat'] = $minat;
  $_SESSION['pesan'] = $pesan;

  header('Location: index.php#contact');
  exit;

}

// P9 : larik terindeks untuk menyimpan teknologi web yang dipelajari.
$teknologiWeb = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>
    
<body>

    <header>
      <div class="header-top"> 
        <h1>Profil Mahasiswa</h1>

        <button 
          class="nav-toggle"
          id="navToggle"
          type="button"
          aria-label="Buka Navigasi"
          aria-controls="navMenu"
          aria-expanded="false"
        >
          &#9776;
        </button>
      </div>

        <nav>
            <ul id="navMenu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Halo, saya <?= tebal($namaMahasiswa); ?>. Saya sedang mempelajari matakuliah <strong><?= bersihkan(NAMA_MATA_KULIAH); ?></strong> pada tahun akademik <?= bersihkan($tahunAkademik); ?>.</p>

            <img src="../fotoi.jpeg" alt="Foto Profil Malya" />
        </section>

        <section id="about">
            <h2>Tentang Saya</h2>

            <article>
                <h3>Profil Singkat</h3>
                <p>Program Studi: <?= bersihkan($namaProdi) . " (" . $programStudi . ")"; ?></p>
                <p>Fokus program studi: <?= bersihkan($fokusProgramStudi); ?></p>
                <p>Status Mahasiswa <?= $statusAktif ? "Aktif" : "Tidak aktif"; ?></p>
                <p>Semester: <?= bersihkan($semester . " (" . $keteranganSemester . ")"); ?></p>
                <p>Sisa semester hingga batas: <?= bersihkan($sisaSemester); ?></p>
                <p>Pemeriksaan rentang semester: <?= bersihkan($statusSemester); ?></p>
                <p>IPK: <?= number_format($ipk, 2, ',', '.'); ?></p>
                <p>Catatan tambahan: <?= $catatanTambahan === null ? "Belum ada" : bersihkan($catatanTambahan); ?></p>

                <h3>Target Belajar (pengulangan for)</h3>
                <ol>
                    <?php
                    // Perulangan for tanpa array; materi larik dibahas pada P9.
                     for ($i = 1; $i <= 5; $i++) {
                     echo "<li>Target belajar ke-" . $i . ": ";
                    switch ($i) {
                     case 1:
                        echo "Memahami sintaks dasar PHP.";
                        break;
                     case 2:
                        echo "Menggunakan variabel dan konstanta.";
                        break;
                     case 3:
                         echo "Menerapkan operator dan percabangan.";
                         break;
                     case 4:
                         echo "Menggunakan perulangan for dan while.";
                         break;
                       default:
                         echo "Belum dipetakan";
                         break;
            }
             echo "</li>";
          }
          ?>
          </ol>

          <! -- P9: contoh penggunaan array terindeks. -->
          <h3>Teknologi Web yang Dipelajari</h3>

          <p>
            Teknologi pertama yang dipelajari:
            <?= bersihkan($teknologiWeb[0]); ?>
          </p>

          <p> Daftar teknologi web yang dipelajari: </p>

            <ul>
            <?php foreach ($teknologiWeb as $teknologi): ?>
                <li><?= bersihkan($teknologi); ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>Semester (Perulangan while):</h3>
            <ol>
            <?php
            $nomorSemester = 1;
            while ($nomorSemester <= 3) {
            echo "<li>Semester " . $nomorSemester . "</li>";
            $nomorSemester++;
            }
          ?>
        </ol>

            </article>
        </section>

        <section id="contact">
            <h2>Kontak</h2>


            <p>
              Kunjungi 
              <a target="_blank" href="https://github.com/2622500033-malya?tab=repositories<?= bersihkan(PROFIL_GITHUB); ?>">Profil Github saya</a>.
            </p>

            <form id ="contactForm" class="js-contact-form" data-validate="contact" action="index.php" method="post" novalidate>
                <div class="form-group"> 
                    <label for="nama">Nama Lengkap</label><br />

                    <input
                        class="input-form"
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="50"
                        required />
                </div>

                <div class="form-group">
                    <label for="email">Email</label><br /> 

                    <input class="input-form" type="email" id="email" name="email" placeholder="2622500033@mahasiswa.atmaluhur.ac.id" required />
                </div>

                <div class="form-group">
                    <label for="semester">Semester</label><br />

                        <input class="input-form" type="number" id="semester" name="semester" min="1" max="14" required /> 
                </div> 

                <div class="form-group">
                    <label for="tanggal">Tanggal Kunjungan</label><br />

                    <input class="input-form" type="date" id="tanggal" name="tanggal" required />
                </div>

                <div class="form-group">
                    <p>Jenis Pesan</p>

                    <input type="radio" id="pertanyaan" name="jenis_pesan" value="pertanyaan" required />
                    <label for="pertanyaan">Pertanyaan</label> 

                    <input type="radio" id="saran" name="jenis_pesan" value="saran"  />
                    <label for="saran">Saran</label>
                 </div>

                 <div class="form-group">
                     <p>Topik yang Diminati</p>

                     <input type="checkbox" id="minat-html" name="minat[]" value="HTML" />
                     <label for="minat-html">HTML</label>

                     <input type="checkbox" id="minat-css" name="minat[]" value="CSS" />
                     <label for="minat-css">CSS</label>  
                </div>

                <div class="form-group">
                  <label for="prodi">Program Studi</label><br />

                  <select class="input-form" id="prodi" name="prodi" required>
                      <option value="">-- Pilih Program Studi --</option>
                      <option value="SI">Sistem Informasi</option>
                      <option value="TI">Teknik Informatika</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label><br />

                    <textarea
                        class="input-form"
                        id="pesan"
                        name="pesan"
                        maxlength="300"
                        placeholder="Tulis pesan Anda"
                        required
                    ></textarea>
                </div>

                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
                <p class="form-feedback" data-form-feedback aria-live="polite"></p>
            </form>
        
        <?php if (isset($_SESSION["form_data"])): ?>
            <?php
            // Larik asosiatif untuk menguhubungkan nama field dengan label.
            /*
            kunci larik tidak harus berupa angka.
            kunci dapat berupa teks yan memiliki makna tertentu.
            */

            $labelmap = [
                "nama" => "Nama Lengkap",
                "email" => "Email",
                "semester" => "Semester",
                "tanggal" => "Tanggal Kunjungan",
                "jenis_pesan" => "Jenis Pesan",
                "prodi" => "Program Studi",
            ];
        ?>
        <article id="hasilkontak" class="submission-result" aria-live="polite">
            <h3>Data Formulir yang Dikirim</h3>
            
                <?php foreach ($labelmap as $key => $value): ?>
                    <p><strong><?= bersihkan($label); ?>:</strong>
                        <?= bersihkan ($_SESSION["form_data"][$key]); ?></p>
                <?php endforeach; ?>
                
                <?php
                /* 
                  $key untuk mendapatkan kunci larik.
                  $label untuk mendapatkan nilai larik.
                  $key untuk mengakses data formulir pada $_SESSION["form-data"].
                */
                ?>

                <p><strong>Topik yang diminati:</strong></p>
                <?php if (count($_SESSION["form-data"]["minat"]) > 0): ?>
                 <ul>
                    <?php foreach ($_SESSION["form-data"]["data"] as $topik): ?>
                      <li><?= bersihkan($topik); ?></li>
                      <?php endforeach; ?>
                    </ul>
                    <?php else: ?>
                    <p>Belum ada topik yang dipilih.</p>
                    <?php endif; ?>

                    <p><strong>Pesan:</strong> <?= nl2br (bersihkan($_SESSION["form_data"]["pesan"])); ?></p>
                    </article>
                    <?php endif; ?>
        </section>
    </main>

    <footer> 
        <p>&copy; <?= date ("Y") ?> <?= bersihkan($namaMahasiswa); ?> [<?= bersihkan($nim) ?>]</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>
