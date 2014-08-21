<?php session_start();
	if (isset($_SESSION["username"])) {
		include "../config.inc.php";
		extract($_POST);
		$username = $_SESSION["username"];
		$db->query("INSERT INTO todo(username,task) VALUES ('$username','$text')");
	}
?>