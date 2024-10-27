<!DOCTYPE html>
<html>
<head>
    <title>Form Visi & Misi</title>
</head>
<body>
    <h1><?= isset($visi_misi) ? 'Edit' : 'Tambah' ?> Visi & Misi</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="visi">Visi:</label>
            <textarea name="visi" id="visi" required><?= isset($visi_misi) ? $visi_misi['visi'] : '' ?></textarea>
        </div>
        <div>
            <label for="misi">Misi:</label>
            <textarea name="misi" id="misi" required><?= isset($visi_misi) ? $visi_misi['misi'] : '' ?></textarea>
        </div>
        <div>
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" id="gambar">
            <?php if (isset($visi_misi) && $visi_misi['gambar']): ?>
                <img src="<?= base_url('uploads/' . $visi_misi['gambar']) ?>" alt="Gambar" width="100">
            <?php endif; ?>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
