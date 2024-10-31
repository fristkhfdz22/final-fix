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
    <br><br>
    <style>
        .imagekepalasekolah1 {
            display: flex;
            justify-content: center;
            padding: 6px;
            width: fit-content;
            margin: 20px auto;
        }

        .judulsambutan h2 {
            color: black;
            text-align: center;
        }

        .underline {
            width: 50px;
            height: 3px;
            background-color: black;
            margin: 10px auto;
        }

        .isisambutan {
            padding: 20px;
            text-align: justify;
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
    </footer>
</body>

</html>