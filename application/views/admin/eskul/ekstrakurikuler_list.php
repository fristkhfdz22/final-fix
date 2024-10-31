<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Ekstrakurikuler</h2>
    <a href="<?php echo site_url('ekstrakurikuler/tambah'); ?>" class="btn btn-primary mb-3">Tambah Ekstrakurikuler</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Nama Ekstrakurikuler</th>
                <th>Deskripsi</th>
                <th>Pembimbing</th>
                <th>Logo</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($ekstrakurikuler)): ?>
                <?php foreach ($ekstrakurikuler as $e): ?>
                    <tr>
                        <td><?php echo $e['nama_ekstra']; ?></td>
                        <td><?php echo substr($e['deskripsi'], 0, 50) . '...'; ?></td>
                        <td><?php echo $e['pembimbing']; ?></td>
                        <td>
                            <?php if ($e['logo']): ?>
                                <img src="<?php echo base_url('uploads/ekstrakurikuler/' . $e['logo']); ?>" alt="Logo" width="50" style="border-radius: 5px;">
                            <?php else: ?>
                                <span>Tidak ada logo</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($e['gambar']): ?>
                                <img src="<?php echo base_url('uploads/ekstrakurikuler/' . $e['gambar']); ?>" alt="Gambar" width="50" style="border-radius: 5px;">
                            <?php else: ?>
                                <span>Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo site_url('ekstrakurikuler/edit/' . $e['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('ekstrakurikuler/hapus/' . $e['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data ekstrakurikuler ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>