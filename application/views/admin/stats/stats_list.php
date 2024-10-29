<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Siswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Daftar Statistik Siswa</h2>
    <a href="<?= site_url('stats/create'); ?>" class="btn btn-primary mb-3">Tambah Statistik</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jumlah Siswa</th>
                <th>Rombongan Belajar</th>
                <th>Kompetensi Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stats as $stat): ?>
                <tr>
                    <td><?= $stat->id; ?></td>
                    <td><?= $stat->jumlah_siswa; ?></td>
                    <td><?= $stat->rombongan_belajar; ?></td>
                    <td><?= $stat->kompetensi_keahlian; ?></td>
                    <td>
                        <a href="<?= site_url('stats/edit/'.$stat->id); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('stats/delete/'.$stat->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
