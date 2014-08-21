<?php session_start();
	if (isset($_SESSION["username"])) {
		include "../config.inc.php";
		$username = $_SESSION["username"];
		$list = $db->query("SELECT * FROM todo WHERE username = '$username'");
		$list = $list->fetchAll();

		die(json_encode($list));
	}
?>