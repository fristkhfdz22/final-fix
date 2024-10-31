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
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Galery</h4>
    </div>
    <br>
    <div class="container">
        <?php foreach ($galeri as $item): ?>
            <div class="image-box">
                <img src="<?= base_url('uploads/galeri/' . $item->img); ?>" alt="<?= $item->judul; ?>">
                <div class="overlay">
                    <h2><?= $item->judul; ?></h2>
                    <p><?= $item->deskripsi; ?></p>
                    <a href="<?= site_url('galeri/view/' . $item->id); ?>">View detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <br>
    <br>
    <br>

    <footer>

    </footer>
</body>

</html>