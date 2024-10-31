<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
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
            display: flex;
            justify-content: center;
            padding: 6px;
            width: fit-content;
            margin: 20px auto;
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

        </div>


        <footer>
        </footer>
        </body>

</html>