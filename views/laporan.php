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
<style>
/* Container Utama */
.container {
    margin-top: 80px;
    padding: 20px;
}

/* Mengatur agar kolom bersebelahan */
.row-tables {
    display: flex;
    gap: 20px;            /* Jarak antar tabel kiri dan kanan */
    align-items: flex-start; /* Agar tinggi tabel tidak dipaksa sama */
    flex-wrap: wrap;      /* Agar jika layar sempit, tabel otomatis turun ke bawah */
}

/* Mengatur ukuran masing-masing kotak tabel */
.table-box {
    flex: 1;              /* Membuat tabel membagi ruang sama rata (50-50) */
    min-width: 400px;     /* Ukuran minimal agar tabel tidak terlalu gepeng di layar kecil */
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

/* Pastikan tabel memenuhi lebar kotak */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Styling tambahan agar judul rapi */
h2 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #2c3e50;
}

/* Responsif: Jika layar HP, buat jadi satu kolom lagi */
@media (max-width: 850px) {
    .row-tables {
        flex-direction: column;
    }
    .table-box {
        min-width: 100%;
    }
}
</style>
<body>
    <div class="container">
    <!-- Bungkus kedua bagian ini -->
    <div class="row-tables">
        
        <!-- Bagian Kiri: Pemasukan -->
        <div class="table-box">
            <h2>Data Pemasukan</h2>
            <table border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KETERANGAN</th>
                        <th>JUMLAH</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_pemasukan as $row) { ?>
                    <tr>
                        <td><?= $row['ID']; ?></td>
                        <td><?= $row['KETERANGAN']; ?></td>
                        <td><?= $row['JUMLAH']; ?></td>
                        <td>
                            <a href="controllers/edit_pemasukan.php?ID=<?= $row['ID'] ?>" class="btn-edit">Edit</a>
                            <a href="controllers/delete_pemasukan.php?ID=<?= $row['ID'] ?>" class="btn-delete">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Bagian Kanan: Pengeluaran -->
        <div class="table-box">
            <h2>Data Pengeluaran</h2>
            <table border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KETERANGAN</th>
                        <th>JUMLAH</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_pengeluaran as $row) { ?>
                    <tr>
                        <td><?= $row['ID']; ?></td>
                        <td><?= $row['KETERANGAN']; ?></td>
                        <td><?= $row['JUMLAH']; ?></td>                  
                        <td>
                            <a href="controllers/edit_pengeluaran.php?ID=<?= $row['ID']  ?>" class="btn-edit">Edit</a>
                            <a href="controllers/delete_pengeluaran.php?ID=<?= $row['ID']  ?>" class="btn-delete">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div> 
</div> 
</body>
</html>