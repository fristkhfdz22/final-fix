<form method="post" enctype="multipart/form-data">
    <label>Judul:</label>
    <input type="text" name="title" value="<?= isset($info_ppdb->title) ? $info_ppdb->title : '' ?>" required>

    <label>Deskripsi:</label>
    <textarea name="description"><?= isset($info_ppdb->description) ? $info_ppdb->description : '' ?></textarea>

    <label>URL YouTube:</label>
    <input type="text" name="youtube" value="<?= isset($info_ppdb->youtube) ? $info_ppdb->youtube : '' ?>">

    <label>Instagram:</label>
    <input type="text" name="instagram" value="<?= isset($info_ppdb->instagram) ? $info_ppdb->instagram : '' ?>">

    <label>Facebook:</label>
    <input type="text" name="facebook" value="<?= isset($info_ppdb->facebook) ? $info_ppdb->facebook : '' ?>">

    <label>Twitter:</label>
    <input type="text" name="twitter" value="<?= isset($info_ppdb->twitter) ? $info_ppdb->twitter : '' ?>">

    <label>Telegram:</label>
    <input type="text" name="telegram" value="<?= isset($info_ppdb->telegram) ? $info_ppdb->telegram : '' ?>">

    <label>Gambar:</label>
    <input type="file" name="image">
    <?php if (!empty($info_ppdb->image)): ?>
        <p>Gambar saat ini: <img src="<?= base_url('uploads/' . $info_ppdb->image) ?>" width="100"></p>
    <?php endif; ?>

    <button type="submit">Simpan</button>
</form>
