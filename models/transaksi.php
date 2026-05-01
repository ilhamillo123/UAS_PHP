<?php
require_once __DIR__ . "/../config/connect.php";

$db = new connect();
$conn = $db->getConnection();


$sql1 = "SELECT SUM(jumlah) AS total_pemasukan FROM pemasukan";
$result1 = $conn->query($sql1);
$dataPemasukan = $result1->fetch_assoc();


$sql2 = "SELECT SUM(jumlah) AS total_pengeluaran FROM pengeluaran";
$result2 = $conn->query($sql2);
$dataPengeluaran = $result2->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kas</title>
</head>
<body>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Jumlah Pemasukan</th>
            <th>Jumlah Pengeluaran</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $dataPemasukan['total_pemasukan']; ?></td>
            <td><?php echo $dataPengeluaran['total_pengeluaran']; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>