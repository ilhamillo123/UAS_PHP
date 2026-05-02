<?php
require_once __DIR__ . "/../config/connect.php";
require_once __DIR__ . "/../models/pemasukan.php";
require_once __DIR__ . "/../models/pengeluaran.php";





$pemasukan = new pemasukan();
$pengeluaran = new pengeluaran();


$data_pemasukan = $pemasukan->read();
$data_pengeluaran = $pengeluaran->read();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="landing_page.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>KETERANGAN</th>
            <th>JUMLAH</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        <?php foreach ($data_pemasukan as $row) { ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['KETERANGAN']; ?></td>
                <td><?php echo $row['JUMLAH']; ?></td>
                <td>
                    <a href="/TUGAS_UAS/controllers/edit_pemasukan.php?ID=<?= $row['ID']; ?>">UPDATE</a>
                <td>
                    <a href="/TUGAS_UAS/controllers/delete_pemasukan.php?ID=<?= $row['ID']; ?>">DELETE</a>
                </td>
               
                
            </tr>
        <?php } ?>
    </table>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>KETERANGAN</th>
            <th>JUMLAH</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        <?php foreach ($data_pengeluaran as $pengeluaran) { ?>
            <tr>
                <td><?php echo $pengeluaran['ID']; ?></td>
                <td><?php echo $pengeluaran['KETERANGAN']; ?></td>
                <td><?php echo $pengeluaran['JUMLAH']; ?></td>
                <td><a href="/TUGAS_UAS/controllers/edit_pengeluaran.php?ID=<?= $pengeluaran['ID'] ?>">UPDATE</a></td>
                <td><a href="/TUGAS_UAS//controllers/delete_pengeluaran.php?ID=<?= $pengeluaran['ID'] ?>">HAPUS</a></td>
  
                

            </tr>
        <?php } ?>
</body>
</html>