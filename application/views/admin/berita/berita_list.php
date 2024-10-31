<div class="container my-5">
    <h2 class="text-center mb-4">List of Berita</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="<?php echo base_url('berita/create'); ?>" class="btn btn-primary">Tambah Berita</a>
    </div>

    <table class="table table-hover table-bordered shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Image</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($berita)): ?>
                <?php foreach ($berita as $item): ?>
                    <tr>
                        <td><?php echo $item->judul; ?></td>
                        <td><?php echo substr($item->konten, 0, 50) . '...'; ?></td>
                        <td>
                            <?php if (!empty($item->img)): ?>
                                <img src="<?php echo base_url('uploads/' . $item->img); ?>" alt="<?php echo $item->judul; ?>" style="width: 80px; height: auto; border-radius: 8px;">
                            <?php else: ?>
                                <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo date('d M Y', strtotime($item->tanggal)); ?></td>
                        <td><?php echo $item->penulis; ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/berita/edit/' . $item->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo base_url('admin/berita/delete/' . $item->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this berita?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">No Berita found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>