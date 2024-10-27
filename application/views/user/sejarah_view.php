<!-- views/user/sejarah_view.php -->
<div class="container">
    <h2>Sejarah Sekolah</h2>
    
    <?php foreach ($sejarah as $item): ?>
        <div class="sejarah-item">
            <h3><?= $item['judul']; ?></h3>
            
            <?php if ($item['gambar']): ?>
                <img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="Gambar Sejarah" style="width: 100%; max-width: 400px; height: auto;">
            <?php endif; ?>
            
            <p><?= $item['konten']; ?></p>
        </div>
        <hr>
    <?php endforeach; ?>
</div>
