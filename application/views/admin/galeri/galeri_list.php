<div class="container">
    <h2>Daftar Galeri</h2>
    <a href="<?= site_url('galeri/create'); ?>" class="btn btn-primary">Tambah Galeri</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galeri as $item): ?>
                <tr>
                    <td><?= $item->id; ?></td>
                    <td><?= $item->judul; ?></td>
                    <td><?= $item->deskripsi; ?></td>
                    <td><img src="<?= base_url('uploads/galeri/' . $item->img); ?>" width="100"></td>
                    <td>
                        <a href="<?= site_url('galeri/edit/' . $item->id); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('galeri/delete/' . $item->id); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
