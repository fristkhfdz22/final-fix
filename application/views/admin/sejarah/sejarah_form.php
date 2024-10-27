<!-- views/admin/sejarah_form.php -->
<h2><?= isset($sejarah) ? 'Edit' : 'Tambah'; ?> Sejarah</h2>

<form action="" method="post" enctype="multipart/form-data">
    <label>Judul:</label><br>
    <input type="text" name="judul" value="<?= isset($sejarah) ? $sejarah['judul'] : ''; ?>"><br>

    <label>Konten:</label><br>
    <textarea name="konten"><?= isset($sejarah) ? $sejarah['konten'] : ''; ?></textarea><br>

    <label>Gambar:</label><br>
    <?php if (isset($sejarah) && $sejarah['gambar']): ?>
        <img src="<?= base_url('uploads/' . $sejarah['gambar']); ?>" width="100"><br>
    <?php endif; ?>
    <input type="file" name="gambar"><br><br>

    <button type="submit"><?= isset($sejarah) ? 'Update' : 'Simpan'; ?></button>
</form>
