<div class="container">
    <h2>Daftar Kritik dan Saran</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pengirim</th>
                <th>Email Pengirim</th>
                <th>Isi Kritik/Saran</th>
                <th>Tanggal Kirim</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kritiksaran as $ks): ?>
                <tr>
                    <td><?php echo $ks->nama_pengirim; ?></td>
                    <td><?php echo $ks->email_pengirim; ?></td>
                    <td><?php echo $ks->isi_kritik_saran; ?></td>
                    <td><?php echo $ks->tanggal_kirim; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
