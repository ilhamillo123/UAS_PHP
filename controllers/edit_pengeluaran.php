<?php
require_once "../models/pengeluaran.php";

$ID =$_GET['ID'];
$pengeluaran = new pengeluaran();
if(isset($_POST['kirim_pengeluaran'])){
    $KETERANGAN = $_POST['KETERANGAN'];
    $JUMLAH = $_POST['JUMLAH'];

    $pengeluaran->update($ID,$KETERANGAN,$JUMLAH);
    header("Location: ../index.php?page=laporan");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_pengeluaran.php?ID=<?= $ID ?>" method="POST">
        <input type="text" name="KETERANGAN" placeholder="keterangan">
        <input type="number" name="JUMLAH" placeholder="jumlah">
        <button type="submit" name="kirim_pengeluaran">UBAH</button>
    </form>
</body>
</html>