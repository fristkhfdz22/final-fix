



<br>
    <style>
          table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 5%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #686666;
        }
        .header {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
    <table>
        <tr>
            <th>No.</th>
            <th>Keterangan</th>
            <th>Kompetensi Keahlian</th>
            <th>Jumlah</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($sarana_prasarana as $item): ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item->keterangan; ?></td>
            <td><?php echo $item->kompetensi_keahlian; ?></td>
            <td><?php echo $item->jumlah; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>