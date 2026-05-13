<?php
require_once "../models/pemasukan.php";
require_once "../models/pengeluaran.php";
require_once __DIR__ . "/../config/connect.php";

if(isset($_POST['kirim_pemasukan'])){
    $KETERANGAN =$_POST['KETERANGAN'];
    $JUMLAH =$_POST['JUMLAH'];

    $pemasukan = new pemasukan();
    $pemasukan->setKETERANGAN($KETERANGAN);
    $pemasukan->setJUMLAH($JUMLAH);
    $pemasukan->creat();
    header("Location: ../landing_page.php?page=dashboard");
}

if(isset($_POST['kirim_pengeluaran'])){
    $KETERANGAN =$_POST['KETERANGAN'];
    $JUMLAH =$_POST['JUMLAH'];

    $pengeluaran = new pengeluaran();
    $pengeluaran->setKETERANGAN($KETERANGAN);
    $pengeluaran->setJUMLAH($JUMLAH);
    $pengeluaran->creat();
    header("Location: ../landing_page.php?page=dashboard");
}