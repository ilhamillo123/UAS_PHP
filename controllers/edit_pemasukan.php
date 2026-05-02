<?php
require_once "../models/pemasukan.php";
$ID = $_GET['ID'];
$pemasukan01 = new pemasukan();
if(isset($_POST['data_baru'])){
    $KETERANGAN = $_POST['keterangan'];
    $JUMLAH = $_POST['jumlah'];

  
    $pemasukan01->update($ID,$KETERANGAN,$JUMLAH);
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
    <form action="edit_pemasukan.php?ID=<?= $ID ?>" method="POST" >
        <input type="text" name="keterangan" placeholder="keterangan">
        <input type="number" name = "jumlah" placeholder="jumlah">
        <button type="submit" name="data_baru"></button>
    </form>
</body>
</html>