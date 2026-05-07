<?php
require_once "../models/pengeluaran.php";

$ID =$_GET['ID'];
$pengeluaran = new pengeluaran();
if(isset($_POST['kirim_pengeluaran'])){
    $KETERANGAN = $_POST['KETERANGAN'];
    $JUMLAH = $_POST['JUMLAH'];

    $pengeluaran->update($ID,$KETERANGAN,$JUMLAH);
    header("Location: ../landing_page.php?page=laporan");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <style>
        /* Import Font */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Kotak Form */
form {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    margin-bottom: 20px;
    color: #2c3e50;
    text-align: center;
    font-size: 1.5rem;
}

/* Label & Input */
label {
    display: block;
    margin-bottom: 5px;
    font-size: 0.9rem;
    color: #666;
}

input {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

button:hover {
    background-color: #2980b9;
}

button:active {
    transform: scale(0.98);
}

/* Tambahkan teks tombol jika kosong di HTML */
button::after {
    content: "Simpan Perubahan";
}

/* Link Kembali */
.back-link {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #7f8c8d;
    font-size: 0.85rem;
}

.back-link:hover {
    color: #34495e;
}

    </style>
</head>
<body>
    <form action="edit_pengeluaran.php?ID=<?= $ID ?>" method="POST">
        <input type="text" name="KETERANGAN" placeholder="keterangan">
        <input type="number" name="JUMLAH" placeholder="jumlah">
        <button type="submit" name="kirim_pengeluaran">UBAH</button>
    </form>
</body>
</html>