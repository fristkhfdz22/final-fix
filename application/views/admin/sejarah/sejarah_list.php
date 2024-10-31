<div class="container-fluid px-4 my-5">
    <h2 class="text-center mb-4">Daftar Sejarah</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="<?= base_url('sejarah/create'); ?>" class="btn btn-primary">Tambah Sejarah</a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($sejarah)): ?>
                <?php foreach ($sejarah as $item): ?>
                    <tr>
                        <td><?= $item['judul']; ?></td>
                        <td><?= substr($item['konten'], 0, 50) . '...'; ?></td> 
                        <td>
                            <?php if ($item['gambar']): ?>
                                <img src="<?= base_url('uploads/' . $item['gambar']); ?>" width="100" alt="<?= $item['judul']; ?>" style="border-radius: 8px;">
                            <?php else: ?>
                                <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('sejarah/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('sejarah/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada sejarah ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>