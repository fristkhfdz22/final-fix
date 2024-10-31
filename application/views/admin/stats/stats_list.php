<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Statistik Siswa</h2>
    <a href="<?= site_url('stats/create'); ?>" class="btn btn-primary mb-3">Tambah Statistik</a>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Jumlah Siswa</th>
                <th>Rombongan Belajar</th>
                <th>Kompetensi Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($stats)): ?>
                <?php foreach ($stats as $stat): ?>
                    <tr>
                        <td><?= $stat->id; ?></td>
                        <td><?= $stat->jumlah_siswa; ?></td>
                        <td><?= $stat->rombongan_belajar; ?></td>
                        <td><?= $stat->kompetensi_keahlian; ?></td>
                        <td>
                            <a href="<?= site_url('stats/edit/' . $stat->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= site_url('stats/delete/' . $stat->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data statistik siswa ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>