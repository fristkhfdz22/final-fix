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
<!-- views/user/visi_misi.php -->
<<!-- views/user/visi_misi.php -->
<br>
<br>
<br>
<br>
<div class="containersambutankepalasekolah">
    <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
    <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
    <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
    <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Visi Misi</h4>
</div>
<br>
<br>
<div class="isisambutan">
    <h2 style="margin-right: 90%; color: white;">Visi</h2>
    <br>
    <p style="margin-left: 5%;"><?= $visi_misi[0]['visi']; ?></p> <!-- Menampilkan visi dari database -->
    <br>
    <h2 style="margin-right: 90%; color: white;">Misi</h2>
    <br>
    <style>
        .daftar-nama {
            list-style: none;
            padding-left: 0;
            margin-left: 5%;
        }
        .daftar-nama li {
            position: relative;
            padding-left: 25px;
            line-height: 1.5;
        }
        .daftar-nama li::before {
            content: '•';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 1.5rem;
            vertical-align: middle;
        }
    </style>
    <ul class="daftar-nama">
        <?php foreach (explode("\n", $visi_misi[0]['misi']) as $misi): ?>
            <li><?= $misi; ?></li> <!-- Menampilkan setiap poin misi -->
        <?php endforeach; ?>
    </ul>
</div>
<br>

<footer>
        <!-- Tambahkan kode footer di sini -->
    </footer>
</body>
</html>