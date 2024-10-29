<h2>Data Sarana Prasarana</h2>
<a href="<?php echo site_url('saranaprasarana/form'); ?>">Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Keterangan</th>
        <th>Kompetensi Keahlian</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($sarana_prasarana as $sarana): ?>
    <tr>
        <td><?php echo $sarana->nomor; ?></td>
        <td><?php echo $sarana->keterangan; ?></td>
        <td><?php echo $sarana->kompetensi_keahlian; ?></td>
        <td><?php echo $sarana->jumlah; ?></td>
        <td>
            <a href="<?php echo site_url('saranaprasarana/edit/'. $sarana->id); ?>">Edit</a> | 
            <a href="<?php echo site_url('saranaprasarana/delete/'. $sarana->id); ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
