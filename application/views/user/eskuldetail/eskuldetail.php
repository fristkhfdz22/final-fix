<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <header>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Ekstrakurikuler</h4>
    </div>
    <br>
    <div class="imagepmr">
        <img src="<?= base_url('uploads/ekstrakurikuler/' . $eskul['gambar']); ?>" alt="<?= $eskul['nama_ekstra']; ?>" class="pmr-img" width="50%" style="margin-left: 25%;">
    </div>
    <br>
    <div class="judulsambutan">
        <h2><?= $eskul['nama_ekstra']; ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
        <p><?= $eskul['deskripsi']; ?></p>
    </div>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Dibimbing Oleh:</h4>
        <p><?= $eskul['pembimbing']; ?></p>
    </div>
    <br>
    <br>
    <br>

    <footer>

    </footer>
</body>

</html>