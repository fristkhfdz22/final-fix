<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Ganti dengan link CSS yang sesuai -->
    <br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Sejarah</h4>
    </div>
    <br>
    <style>
        .imagekepalasekolah1 {
    display: flex; /* Menggunakan Flexbox */
    justify-content: center; /* Memusatkan konten secara horizontal */
    /* background-color: #f0f0f0; Warna latar belakang abu-abu */
    padding: 6px; /* Memberikan ruang di dalam kontainer */
    /* border-radius: 5px; Opsional: sudut melengkung */
    width: fit-content; /* Mengatur lebar berdasarkan konten */
    margin: 20px auto; /* Memusatkan kontainer di tengah halaman */
}

    </style>
            <?php foreach ($sejarah as $item): ?>
                <?php if ($item['gambar']): ?>

    <div class="imagekepalasekolah1" style="width: 300px; height: 300px;">
    <img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="Kepala Sekolah" class="kepalasekolah-img" width="300px" height="300px">
    </div>
    <?php endif; ?>

    <br>
    <div class="judulsambutan">
        <h2 style="color: black;"><?= $item['judul']; ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
    <?= $item['konten']; ?>
             <?php endforeach; ?>

        <style>
          .daftar-nama {
              list-style: none; /* Menghilangkan bullet default */
              padding-left: 0;
              margin-left: 5%;
          }
        
          .daftar-nama li {
              position: relative;
              padding-left: 25px; /* Menambahkan ruang di kiri untuk bullet */
              line-height: 1.5; /* Menambah jarak antar baris */
          }
        
          .daftar-nama li::before {
              content: '•'; /* Bullet custom */
              position: absolute;
              left: 0; /* Posisi bullet di kiri */
              top: 50%; /* Letakkan di tengah vertikal */
              transform: translateY(-50%); /* Untuk memastikan bullet berada tepat di tengah */
              color: white; /* Warna bullet putih */
              font-size: 1.5rem; /* Ukuran bullet */
              vertical-align: middle; /* Bullet sejajar vertikal dengan teks */
          }
        </style>
        
    </div>
    

    <footer>
        <!-- Tambahkan kode footer di sini -->
    </footer>
</body>
</html>
