<!-- views/admin/sejarah_list.php -->
<h2>Daftar Sejarah</h2>
<a href="<?= base_url('sejarah/create'); ?>">Tambah Sejarah</a>
<table border="1" cellpadding="8">
    <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($sejarah as $item): ?>
        <tr>
            <td><?= $item['judul']; ?></td>
            <td><?= $item['konten']; ?></td>
            <td>
                <?php if ($item['gambar']): ?>
                    <img src="<?= base_url('uploads/' . $item['gambar']); ?>" width="100">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url('sejarah/edit/' . $item['id']); ?>">Edit</a>
                <a href="<?= base_url('sejarah/delete/' . $item['id']); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
