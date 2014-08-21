<?php 
if(isset($_POST['submit'])) {

  if(count($_POST)>0){

  $errors = array();

  $username = trim(strip_tags($_POST['username']));
  $password = trim(strip_tags($_POST['password']));
  
  include "config.inc.php";

  // RECUPERATION ET COMPARAISON
      if (!empty($username)){
          // Verification de l'existence 'username'
          $query = $db->query("SELECT * FROM users WHERE username='$username'");
          $query = $query->fetchAll();

          if (empty($query)) { $errors['username'][] = 'Ce nom d\'utilisateur n\'existe pas'; }
          // L'input est bien rempli ?
        } else { $errors['username'][] = 'Indiquez votre nom d\'utilisateur'; }


      if (!empty($password)) {

          $password = SHA1($password);
          //Vérification de l'existence 'password'
          $query = $db->query("SELECT * FROM users WHERE password='$password'");
          $query = $query->fetchAll();

          if (empty($query)) { $errors['password'][] = 'Le mot de passe ne correspond pas'; }
          // L'input est bien rempli ?
        } else { $errors['password'][] = 'Indiquez votre mot de passe'; }


      // Si il n'y a pas d'erreurs...
      if (empty($errors)) {

          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;

          echo '<script>window.location = "preparatifs.view.php";</script>';
        }
  }
}
?>