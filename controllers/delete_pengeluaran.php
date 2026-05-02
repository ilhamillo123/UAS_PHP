<?php
require_once "../models/pengeluaran.php";
$ID = $_GET['ID'];
$pengeluaran = new pengeluaran();
$pengeluaran->delete($ID);
header("Location: ../index.php?page=laporan");

