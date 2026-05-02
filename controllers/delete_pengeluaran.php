<?php
require_once "../models/pengeluaran.php";
$ID = $_GET['ID'];
$pengeluaran = new pengeluaran();
$pengeluaran->delete($ID);
header("Location: ../landing_page.php?page=laporan");

