<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi PPDB</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>"> <!-- Link ke stylesheet Anda -->
</head>
<body>
    <header>
        <h1>Informasi PPDB</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="<?= base_url('user/home'); ?>">Home</a></li>
            <li><a href="<?= base_url('user/info_ppdb'); ?>">Info PPDB</a></li>
            <!-- Tambahkan menu lainnya sesuai kebutuhan -->
        </ul>
    </nav>

    <main>
        <?php if (!empty($info_ppdb)): ?>
            <?php foreach ($info_ppdb as $item): ?>
                <article>
                    <h2><?= $item->title; ?></h2>
                    <img src="<?= base_url('uploads/' . $item->image); ?>" alt="<?= $item->title; ?>" style="max-width: 100%;">
                    <p><?= $item->description; ?></p>
                    <div class="social-links">
                        <a href="<?= $item->youtube; ?>" target="_blank">YouTube</a>
                        <a href="<?= $item->instagram; ?>" target="_blank">Instagram</a>
                        <a href="<?= $item->facebook; ?>" target="_blank">Facebook</a>
                        <a href="<?= $item->twitter; ?>" target="_blank">Twitter</a>
                        <a href="<?= $item->telegram; ?>" target="_blank">Telegram</a>
                    </div>
                    <hr>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada informasi PPDB yang tersedia saat ini.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y'); ?> Sekolah Anda. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
