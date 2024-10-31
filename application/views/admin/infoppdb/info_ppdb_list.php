<div class="container-fluid px-4 my-5">
    <h2 class="text-center mb-4">Daftar Info PPDB</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="<?= base_url('admin/infoppdb/create'); ?>" class="btn btn-primary">Tambah Info PPDB</a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($info_ppdb)): ?>
                <?php foreach ($info_ppdb as $info): ?>
                    <tr>
                        <td><?= $info->title ?></td>
                        <td><?= substr($info->description, 0, 50) . '...' ?></td>
                        <td>
                            <?php if (!empty($info->image)): ?>
                                <img src="<?= base_url('uploads/' . $info->image) ?>" width="100" alt="<?= $info->title ?>" style="border-radius: 8px;">
                            <?php else: ?>
                                <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= site_url('InfoPpdb/edit/' . $info->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('InfoPpdb/delete/' . $info->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus info ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada Info PPDB ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>