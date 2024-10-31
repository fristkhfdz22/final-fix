<div class="container">
    <h2><?= isset($galeri) ? 'Edit' : 'Tambah'; ?> Galeri</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?= isset($galeri) ? site_url('galeri/update/' . $galeri->id) : site_url('galeri/store'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="<?= isset($galeri->judul) ? $galeri->judul : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"><?= isset($galeri->deskripsi) ? $galeri->deskripsi : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="img">Gambar:</label>
            <input type="file" name="img" id="img" class="form-control">
            <?php if (isset($galeri) && $galeri->img): ?>
                <p>Gambar Saat Ini:</p>
                <img src="<?= base_url('uploads/galeri/' . $galeri->img); ?>" width="100" alt="Gambar Galeri">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary"><?= isset($galeri) ? 'Update' : 'Simpan'; ?></button>
    </form>
</div>