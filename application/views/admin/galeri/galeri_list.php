<div class="container mt-5">
    <h2 class="text-center">Daftar Galeri</h2>
    <a href="<?= site_url('galeri/create'); ?>" class="btn btn-primary mb-3">Tambah Galeri</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($galeri)): ?>
                <?php foreach ($galeri as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item->id); ?></td>
                        <td><?= htmlspecialchars($item->judul); ?></td>
                        <td><?= htmlspecialchars($item->deskripsi); ?></td>
                        <td>
                            <?php if (!empty($item->img)): ?>
                                <img src="<?= base_url('uploads/galeri/' . $item->img); ?>" width="100" alt="Gambar Galeri">
                            <?php else: ?>
                                <span class="text-muted">Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= site_url('galeri/edit/' . $item->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('galeri/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data galeri yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>