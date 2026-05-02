<?php
require_once "../models/pemasukan.php";
$ID = $_GET['ID'];

$pemasukan = new pemasukan();
$pemasukan->delete($ID);
header("Location: ../landing_page.php?page=laporan")

?>