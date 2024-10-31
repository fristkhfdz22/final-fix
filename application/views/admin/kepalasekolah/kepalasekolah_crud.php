<div class="container mt-5">
    <h2 class="text-center mb-4">Kepala Sekolah List</h2>
    <a href="<?= base_url('kepalasekolah/create'); ?>" class="btn btn-primary mb-3">Add New</a>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi Sambutan</th>
                <th>Tanggal</th>
                <th>Foto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($kepalasekolah)): ?>
                <?php foreach ($kepalasekolah as $item): ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['judul']; ?></td>
                        <td><?= substr($item['isisambutan'], 0, 50) . '...'; ?></td>
                        <td><?= date('d-m-Y', strtotime($item['tanggal'])); ?></td>
                        <td>
                            <img src="<?= base_url('uploads/kepalasekolah/' . $item['foto']); ?>" width="100" alt="<?= $item['judul']; ?>" style="border-radius: 8px;">
                        </td>
                        <td>
                            <a href="<?= base_url('kepalasekolah/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('kepalasekolah/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data kepala sekolah ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>