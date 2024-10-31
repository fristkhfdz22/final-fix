<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Sarana Prasarana</h1>
    <a href="<?= site_url('saranaprasarana/create') ?>" class="btn btn-primary mb-3">Tambah Sarana Prasarana</a>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($sarana)): ?>
                <?php foreach ($sarana as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item->nama); ?></td>
                        <td><?= htmlspecialchars($item->jumlah); ?></td>
                        <td><?= htmlspecialchars($item->keterangan); ?></td>
                        <td>
                            <a href="<?= site_url('saranaprasarana/edit/' . $item->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('saranaprasarana/delete/' . $item->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada data sarana prasarana yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>