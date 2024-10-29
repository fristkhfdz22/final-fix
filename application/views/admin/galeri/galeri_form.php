<form action="<?= site_url('galeri/update/' . $galeri->id); ?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="judul" value="<?= $galeri->judul; ?>" required>
    <textarea name="deskripsi"><?= $galeri->deskripsi; ?></textarea>
    <input type="file" name="img"> <!-- Gambar baru bisa diunggah -->
    <button type="submit">Update</button>
</form>
