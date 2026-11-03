<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<section id="tombol">
            <h2>Registrasi</h2>
            <p class="form-feedback-error"></p>

            <form id="contactForm" action="registrasi.php" method="post" novalidate>
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
                <p id="formFeedback"></p>
            </form>