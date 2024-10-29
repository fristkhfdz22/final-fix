<div class="container">
    <h1>Daftar Sarana Prasarana</h1>
    <a href="<?= site_url('saranaprasarana/create') ?>" class="btn btn-primary">Tambah Sarana Prasarana</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sarana as $item): ?>
                <tr>
                    <td><?= $item->nama; ?></td>
                    <td><?= $item->jumlah; ?></td>
                    <td><?= $item->keterangan; ?></td>
                    <td>
                        <a href="<?= site_url('saranaprasarana/edit/'.$item->id) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('saranaprasarana/delete/'.$item->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
