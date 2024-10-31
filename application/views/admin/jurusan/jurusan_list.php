<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Jurusan</h1>
    <a href="<?= site_url('jurusan/create'); ?>" class="btn btn-primary mb-3">Tambah Jurusan</a>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($jurusan)): ?>
                <?php foreach ($jurusan as $j): ?>
                    <tr>
                        <td><?= $j['id']; ?></td>
                        <td><?= $j['nama']; ?></td>
                        <td><?= substr($j['deskripsi'], 0, 50) . '...'; ?></td> <!-- Cuplikan deskripsi -->
                        <td>
                            <img src="<?= base_url('uploads/jurusan/' . $j['logo']); ?>" width="50" alt="<?= $j['nama']; ?>" style="border-radius: 5px;">
                        </td>
                        <td>
                            <img src="<?= base_url('uploads/jurusan/' . $j['gambar']); ?>" width="50" alt="<?= $j['nama']; ?>" style="border-radius: 5px;">
                        </td>
                        <td>
                            <a href="<?= site_url('admin/jurusan/edit/' . $j['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('admin/jurusan/delete/' . $j['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data jurusan ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>