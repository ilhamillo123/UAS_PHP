<?php
require_once "../models/pemasukan.php";
$ID = $_GET['ID'];

$pemasukan = new pemasukan();
$pemasukan->setID($ID);
$pemasukan->delete();
header("Location: ../landing_page.php?page=laporan")

?>