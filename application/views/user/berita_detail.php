<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"> <!-- Ganti dengan link CSS yang sesuai -->

</head>
<body>

<br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Berita</h4>
    </div>
    <br>
    
    <div class="containerberita">
        <!-- Sisi Kiri: Search, Category, Archive -->
        <div class="left-columnberita">
            <!-- Search Box -->
            <div class="containersearchberita">
                <h3>Search</h3>
                <br>
                <div class="search-boxberita">
                    <input type="text" id="search-input" placeholder="Cari...">
                    <button type="button" onclick="search()">Search</button>
                </div>
            </div>

            <!-- Category -->
            <div class="containercategoryberita">
                <h3>Archive</h3>
                <br>
                <div class="bg">
                    <ul>
                    <?php if(!empty($berita)): ?>
                        <?php foreach($berita as $item): ?>
                        <li><?= $item->judul; ?>
                        <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Belum ada berita yang tersedia.</p>
        <?php endif; ?>
          
                    </ul>
                </div>
            </div>

            <!-- Archive -->
            <!-- <div class="containerarchiveberita">
                <h3>Archive</h3>
                <br>
                <div class="bgarchiveberita">
                    <ul>
                        <li>Archive 1</li>
                        <li>Archive 2</li>
                        <li>Archive 3</li>
                        <li>Archive 4</li>
                        <li>Archive 5</li>
                    </ul>
                </div>
            </div> -->
        </div>

        <!-- Sisi Kanan: Berita -->
        <div class="right-columnberita">
            <h3 style="color: black;">Latest News</h3>
            <br>
            <?php if(!empty($berita)): ?>
                <?php foreach($berita as $item): ?>
            <div class="news-itemberita">
                <img src="<?= base_url('uploads/' . $item->img); ?>" alt="" class="news-image"style="width: 50%; height: 50%;">
                <h4><?= $item->judul; ?></h4>
                <p><?= substr($item->konten, 0, 100); ?>...
                <a href="<?php echo base_url('berita/detail/' . $item->id); ?>" class="btn btn-primary">Read More</a>
        </div>
        
        <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Belum ada berita yang tersedia.</p>
        <?php endif; ?>
    </div>




    <footer></footer>
</body>
</html>