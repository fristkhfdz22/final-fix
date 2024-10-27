<!DOCTYPE html>
<html>
<head>
    <title>Daftar Visi & Misi</title>
</head>
<body>
    <h1>Daftar Visi & Misi</h1>
    <a href="<?= base_url('visimisi/create'); ?>">Tambah Visi & Misi</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visi_misi as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['visi']; ?></td>
                    <td><?= $item['misi']; ?></td>
                    <td><img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="Gambar" width="50"></td>
                    <td>
                        <a href="<?= base_url('visimisi/edit/' . $item['id']); ?>">Edit</a>
                        <a href="<?= base_url('visimisi/delete/' . $item['id']); ?>" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
