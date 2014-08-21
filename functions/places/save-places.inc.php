<?php session_start();

$username = $_SESSION['username'];

$name = $_POST['titre'];
$description = $_POST['description'];
$lat =  $_POST['lat'];
$lng =  $_POST['lng'];

$nameimg = $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];
$size = $_FILES['photo']['size'];
$fileExt = strrchr($_FILES['photo']['name'], '.');

          
	if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/gif")) {
	  if ($size <= 1000000) {

		include "../config.inc.php";
		$db->query("INSERT INTO markers (username,name,description,lat,lng) VALUES ('$username','$name','$description','$lat','$lng')");
        $lastID = $db->query("SELECT id FROM markers ORDER BY id DESC");
        $lastID = $lastID->fetchAll();
        $lastID = $lastID[0][0];
        $newName = $lastID . $fileExt;
         header('Location:../../places.view.php');

		if (move_uploaded_file($_FILES["photo"]["tmp_name"], "../../users/images-map/" . $newName)) {
		    try {
		        $res=$db->query("UPDATE markers SET image = '$newName' WHERE  id='$lastID'");
		        echo $newName;
		    } catch(PDOException $e) {
		        die($e->getMessage()); // error when updating db
		    }
			} else {
			    echo "Erreur lors de l'upload du fichier";
			}
	    } else echo "la taille de $nameimg est trop lourde <br> la taille est $size et doit etre moin que 100kb";
	 } else  echo "Ce format $type n'est pas autorisé<br>";

	
?>