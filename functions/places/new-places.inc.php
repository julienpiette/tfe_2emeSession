<?php
error_reporting(0);
include "../config.inc.php";

$query = $db->query("SELECT * FROM markers");
$query = $query->fetchAll();
echo json_encode($query);