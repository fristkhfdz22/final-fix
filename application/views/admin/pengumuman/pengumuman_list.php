<div class="container-fluid px-4 my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>List of Pengumuman</h2>
        <a href="<?php echo base_url('pengumuman/create'); ?>" class="btn btn-primary">Tambah Pengumuman</a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pengumuman)): ?>
                <?php foreach ($pengumuman as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['judul']; ?></td>
                        <td><?php echo substr($item['isi'], 0, 50) . '...'; ?></td> <!-- Cuplikan isi singkat -->
                        <td><?php echo date('d M Y', strtotime($item['tanggal_mulai'])); ?></td>
                        <td><?php echo date('d M Y', strtotime($item['tanggal_selesai'])); ?></td>
                        <td>
                            <a href="<?php echo base_url('pengumuman/edit/' . $item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo base_url('pengumuman/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada pengumuman ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>