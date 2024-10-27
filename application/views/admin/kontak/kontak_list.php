<h2>Daftar Kontak</h2>
<a href="<?php echo site_url('kontak/add'); ?>" class="btn btn-primary">Tambah Kontak</a>
<table class="table">
    <thead>
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
        <?php foreach ($kontak as $k): ?>
            <tr>
                <td><?php echo $k->id; ?></td>
                <td><?php echo $k->alamat; ?></td>
                <td><?php echo $k->telepon; ?></td>
                <td><?php echo $k->email; ?></td>
                <td><?php echo $k->maps_url; ?></td>
                <td>
                    <a href="<?php echo site_url('kontak/edit/' . $k->id); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo site_url('kontak/delete/' . $k->id); ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
