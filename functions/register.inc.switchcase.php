<?php

if(isset($_POST['submit'])){
  if(count($_POST)>0){

    $errors = array();

    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
    $name = $_FILES['myimg']['name'];
    $temp = $_FILES['myimg']['tmp_name'];
    $type = $_FILES['myimg']['type'];
    $size = $_FILES['myimg']['size'];

    include "config.inc.php";

    switch extract ($_POST) {

      case (empty($username)):
          $errors['user'][] = 'Indiquez votre nom d\'utilisateur';
          break;

      case (!empty($username)):
          $query = $db->query("SELECT * FROM users WHERE username='$username'");
          $query = $query->fetchAll();
            if (!empty($query)){
              $errors['user'][] = 'Nom d\'utilisateur déjà utilisé';
           }
          break;

      case (!empty($password)):
          $errors['password'][] = 'Indiquez votre mot de passe';
          break;

      case (strlen($password)>4):
          $errors['password'][] = 'Minimum 5 caractères';
          break;

      case ($password == $repeatpassword):
          $password = SHA1($password);
          $repeatpassword = SHA1($repeatpassword);
          if (($password != $repeatpassword)) {
            $errors['repeatpassword'][] = 'Les mots de passe ne sont pas identiques';
          }
          break;

       case (($type == "image/jpeg") || ($type == "image/jpg") || ($type == "image/png") || ($type == "image/gif")):
          $errors['type'][] = 'Le format de l\'image n\'est pas autorisé';
          break;

      case ($size > 1000000):
            $errors['size'][] = 'Le poid de l\'image ne doit pas dépasser les 1Mo';
          break;

      case (!empty($size)):
          $errors['empty_size'][] = 'Veuillez choisir une image';
          break;

     

    default:

        if(empty($errors)){

            mkdir('users/images-profil/'.$username);
                      $uploaddir = 'users/images-profil/'.$username.'/';
                      $file = $uploaddir . basename($name); 
                      move_uploaded_file($temp, $file);

                      $db->query("INSERT INTO users(username,password,repeatpassword)
                                  VALUES ('$username','$password','$repeatpassword')");

                      header('Location:login.view.php');
        }
    }
  }
}
?>