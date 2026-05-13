<?php
require_once "../models/pengeluaran.php";
$ID = $_GET['ID'];
$pengeluaran = new pengeluaran();
$pengeluaran->setID($ID);
$pengeluaran->delete();
header("Location: ../landing_page.php?page=laporan");

