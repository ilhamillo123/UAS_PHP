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
</head>
<body>
    <table border="1">
        <tr>
            <th>KETERANGAN</th>
            <th>JUMLAH</th>
        </tr>
        <?php foreach ($data_pemasukan as $pemasukan) { ?>
            <tr>
                <td><?php echo $pemasukan['KETERANGAN']; ?></td>
                <td><?php echo $pemasukan['JUMLAH']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <table border="1">
        <tr>
            <th>KETERANGAN</th>
            <th>JUMLAH</th>
        </tr>
        <?php foreach ($data_pengeluaran as $pengeluaran) { ?>
            <tr>
                <td><?php echo $pengeluaran['KETERANGAN']; ?></td>
                <td><?php echo $pengeluaran['JUMLAH']; ?></td>
            </tr>
        <?php } ?>
</body>
</html>