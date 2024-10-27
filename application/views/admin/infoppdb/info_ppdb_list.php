<h2>Daftar Info PPDB</h2>
<a href="<?= base_url('admin/infoppdb/create'); ?>">Tambah Info PPDB</a>
<table>
<table>
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Action</th>
    </tr>
    <?php foreach ($info_ppdb as $info): ?>
    <tr>
        <td><?= $info->title ?></td>
        <td><?= $info->description ?></td>
        <td><img src="<?= base_url('uploads/' . $info->image) ?>" width="100"></td>
        <td>
            <a href="<?= site_url('InfoPpdb/edit/' . $info->id) ?>">Edit</a>
            <a href="<?= site_url('InfoPpdb/delete/' . $info->id) ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


