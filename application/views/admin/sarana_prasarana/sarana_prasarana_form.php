<h2><?php echo isset($sarana) ? 'Edit' : 'Tambah'; ?> Data Sarana Prasarana</h2>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo isset($sarana) ? $sarana->id : ''; ?>">
    Nomor: <input type="text" name="nomor" value="<?php echo isset($sarana) ? $sarana->nomor : ''; ?>"><br>
    Keterangan: <input type="text" name="keterangan" value="<?php echo isset($sarana) ? $sarana->keterangan : ''; ?>"><br>
    Kompetensi Keahlian: <input type="text" name="kompetensi_keahlian" value="<?php echo isset($sarana) ? $sarana->kompetensi_keahlian : ''; ?>"><br>
    Jumlah: <input type="text" name="jumlah" value="<?php echo isset($sarana) ? $sarana->jumlah : ''; ?>"><br>
    <button type="submit"><?php echo isset($sarana) ? 'Update' : 'Simpan'; ?></button>
</form>
