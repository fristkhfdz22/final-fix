<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Kontak</h2>
    <a href="<?php echo site_url('kontak/add'); ?>" class="btn btn-primary mb-3">Tambah Kontak</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Maps URL</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($kontak)): ?>
                <?php foreach ($kontak as $k): ?>
                    <tr>
                        <td><?php echo $k->id; ?></td>
                        <td><?php echo $k->alamat; ?></td>
                        <td><?php echo $k->telepon; ?></td>
                        <td><?php echo $k->email; ?></td>
                        <td>
                            <a href="<?php echo $k->maps_url; ?>" target="_blank" class="btn btn-link">Lihat Peta</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('kontak/edit/' . $k->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('kontak/delete/' . $k->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data kontak ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>