<div class="container mt-5">
    <h2 class="text-center">Daftar Visi & Misi</h2>
    <a href="<?= base_url('visimisi/create'); ?>" class="btn btn-primary mb-3">Tambah Visi & Misi</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($visi_misi)): ?>
                <?php foreach ($visi_misi as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['id']); ?></td>
                        <td><?= htmlspecialchars($item['visi']); ?></td>
                        <td><?= htmlspecialchars($item['misi']); ?></td>
                        <td>
                            <?php if (!empty($item['gambar'])): ?>
                                <img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="Gambar" width="50">
                            <?php else: ?>
                                <span>Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('visimisi/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('visimisi/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data visi & misi yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>