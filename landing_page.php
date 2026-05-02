<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloria Pritindo</title>

    <link rel="stylesheet" href="landing_page.css">
</head>
<body>

    <!-- HEADER / NAVBAR -->
    <header>
        <nav>
            <ul>
                <li><a href="landing_page.php?page=dashboard">Dashboard</a></li>
                <li><a href="landing_page.php?page=laporan">Laporan</a></li>
                <li><a href="landing_page.php?page=tambah_transaksi">Tambah Transaksi</a></li>
            </ul>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main>
        <div class="container">
            <?php
            $page = $_GET['page'] ?? 'dashboard';

            if($page == 'dashboard'){
                include 'views/dashboard.php';  

            } elseif($page == 'laporan'){
                include 'views/laporan.php';    

            } elseif($page == 'tambah_transaksi') {
                include 'views/tambah_transaksi.php';
            }
            ?>
        </div>
    </main>

</body>
</html>