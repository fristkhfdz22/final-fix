<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Guru & Staff</h2>
    <a href="<?= site_url('gurustaff/create') ?>" class="btn btn-primary mb-3">Tambah Guru/Staff</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($gurustaff)): ?>
                <?php foreach ($gurustaff as $gs): ?>
                    <tr>
                        <td><?= $gs->id ?></td>
                        <td><?= $gs->nama ?></td>
                        <td>
                            <?php if ($gs->gambar): ?>
                                <img src="<?= base_url('uploads/gurustaff/' . $gs->gambar) ?>" width="100" alt="Gambar" style="border-radius: 5px;">
                            <?php else: ?>
                                <span>Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $gs->jabatan ?></td>
                        <td>
                            <a href="<?= site_url('gurustaff/edit/' . $gs->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('gurustaff/delete/' . $gs->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data guru/staff ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>