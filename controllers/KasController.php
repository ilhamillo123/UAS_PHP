<?php
require_once __DIR__ . "/../config/connect.php";
require_once __DIR__ . "/../models/kas.php";

$kas = new kas();
$total_kas = $kas->total_kas();



