<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Ganti dengan link CSS yang sesuai -->
</head>
<body>
    <header>
        <!-- Tambahkan kode header di sini -->
    </header>
<br>
<br>
<br><br>
<style>
    .imagekepalasekolah1 {
        display: flex; /* Menggunakan Flexbox */
        justify-content: center; /* Memusatkan konten secara horizontal */
        padding: 6px; /* Memberikan ruang di dalam kontainer */
        width: fit-content; /* Mengatur lebar berdasarkan konten */
        margin: 20px auto; /* Memusatkan kontainer di tengah halaman */
    }
    .judulsambutan h2 {
        color: black;
        text-align: center; /* Memusatkan teks judul */
    }
    .underline {
        width: 50px; /* Lebar garis bawah */
        height: 3px; /* Tinggi garis bawah */
        background-color: black; /* Warna garis bawah */
        margin: 10px auto; /* Memusatkan garis bawah */
    }
    .isisambutan {
        padding: 20px; /* Ruang dalam untuk isi sambutan */
        text-align: justify; /* Meratakan teks ke kiri dan kanan */
    }
</style>

<div class="imagekepalasekolah1" style="width: 300px; height: 300px;">
    <img src="<?php echo base_url('uploads/jurusan/' . $jurusan['gambar']); ?>" alt="<?php echo $jurusan['nama']; ?>" class="kepalasekolah-img" width="300" height="300">
</div>
<br>
<div class="judulsambutan">
    <h2><?php echo $jurusan['nama']; ?></h2>
    <div class="underline"></div>
</div>
<br>
<div class="isisambutan">
    <p><?php echo $jurusan['deskripsi']; ?></p>
</div>
<br>
<footer>
        <!-- Tambahkan kode footer di sini -->
    </footer>
</body>
</html>
