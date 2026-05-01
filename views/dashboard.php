<?php
require_once __DIR__ . "/../config/connect.php";
require_once __DIR__ . "/../controllers/kasController.php";

$kas = new kas();
$total_kas = $kas->total_kas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<div class="container">

    <h1>Dashboard</h1>

    <div class="card">
        <h2>Total Kas</h2>
        <p><b>Rp <?php echo number_format($total_kas, 0, ',', '.'); ?></b></p>
    </div>

   <div class="container about-section">
    
    <div class="about-text">
        <h1>Informasi IPPMY</h1>

        <h3>IPPMY</h3>

        <h4>Visi</h4>
        <p>
            Menjadi organisasi pelajar dan pemuda yang aktif, kreatif, serta mampu 
            memberikan kontribusi positif bagi masyarakat.
        </p>

        <h4>Misi</h4>
        <ul>
            <li>Meningkatkan kualitas anggota melalui kegiatan pendidikan dan sosial</li>
            <li>Membangun solidaritas antar anggota</li>
            <li>Mengelola organisasi secara transparan dan profesional</li>
            <li>Meningkatkan pelayanan organisasi melalui sistem digital</li>
        </ul>
    </div>

    <div class="about-image">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Ilustrasi">
    </div>

</div>


</body>
</html>