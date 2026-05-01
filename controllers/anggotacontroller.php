<?php
require_once __DIR__ . "/../config/connect.php";
require_once "../models/anggota.php";
$anggota = new anggota();

if(isset($_POST['kirim_anggota'])){
    $nama = $_POST['nama'];
    $anggota->create(null, $nama);
    header("Location: ../index.php?page=dashboard");
}


















?>