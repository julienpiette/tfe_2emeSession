<?php
if(isset($_POST['submit'])){

  if(count($_POST)>0){

    $errors = array();

    $username = trim(strip_tags($_POST['username']));
    $password = trim(strip_tags($_POST['password']));
    $repeatpassword = trim(strip_tags($_POST['repeatpassword']));
    $name = $_FILES['myimg']['name'];
    $temp = $_FILES['myimg']['tmp_name'];
    $type = $_FILES['myimg']['type'];
    $size = $_FILES['myimg']['size'];

    include "config.inc.php";
    // L'input est rempli ?
    if(empty($username)){
        $errors['username'][] = 'Indiquez votre nom d\'utilisateur';
    }else{
      //Verification de la disponibilité de 'username'
       $query = $db->query("SELECT * FROM users WHERE username='$username'");
       $query = $query->fetchAll();
       if (!empty($query)){
          $errors['username'][] = 'Nom d\'utilisateur déjà utilisé';
       }
    }

    //L'input est bien rempli ?
    if(!empty($password)){
      // Verification du nombre de caractere
      if(strlen($password)>4){
        // Le password 'correspond' au 'repeatpassword' ?
        if ($password == $repeatpassword) {
          // 'password' crypté
          $password = SHA1($password);
          $repeatpassword = SHA1($repeatpassword);
        }else {
          $errors['repeatpassword'][] = 'Les mots de passe ne sont pas identiques';
        }
      }else{
        $errors['password'][] = 'Minimum 5 caractères';
      }
    }else {
      $errors['password'][] = 'Indiquez votre mot de passe';
    }

    // L'input est bien rempli ?
    if (!empty($size)) {
      // Verification du type de fichiers
      if (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/gif")) {
        // Verification du poids du fichier (1Mo max)
        if ($size >= 1000000) {$errors['size'][] = 'Le poid de l\'image ne doit pas dépasser les 1Mo';}
         
      } else {$errors['type'][] = 'Le format de l\'image n\'est pas autorisé';}

    } else {$errors['size'][] = 'Veuillez choisir une image';}
    

    // Si $errors est vide 
    if(empty($errors)){

      mkdir('users/images-profil/'.$username);
                $uploaddir = 'users/images-profil/'.$username.'/';
                $file = $uploaddir . basename($name); 
                move_uploaded_file($temp, $file);

                $db->query("INSERT INTO users(username,password,repeatpassword)
                            VALUES ('$username','$password','$repeatpassword')");

                
          echo '<script>window.location = "login.view.php";</script>';

    }      
  }
}
?>