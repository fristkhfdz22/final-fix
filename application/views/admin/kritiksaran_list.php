<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Kritik dan Saran</h2>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Nama Pengirim</th>
                <th>Email Pengirim</th>
                <th>Isi Kritik/Saran</th>
                <th>Tanggal Kirim</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($kritiksaran)): ?>
                <?php foreach ($kritiksaran as $ks): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ks->nama_pengirim); ?></td>
                        <td><?php echo htmlspecialchars($ks->email_pengirim); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($ks->isi_kritik_saran)); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($ks->tanggal_kirim)); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada kritik dan saran yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>