<?php
require_once "models/pemasukan.php";
require_once "models/pengeluaran.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Transaksi</h1>
    <i>PEMASUKAN</i>
    <form action="controllers/TransaksiController.php" method="POST">
        <input type="text" name="KETERANGAN" placeholder="KETERANGAN">
        <input type="number" name="JUMLAH" placeholder="JUMLAH">
        <button type="submit" name="kirim_pemasukan">Kirim</button>
    </form>

    <i>PENGELUARAN</i>
    <form action="controllers/TransaksiController.php" method="POST">
        <input type="text" name="KETERANGAN" placeholder="KETERANGAN">
        <input type="number" name="JUMLAH" placeholder="JUMLAH">
        <button type="submit" name="kirim_pengeluaran">Kirim</button>




    
</body>
</html>