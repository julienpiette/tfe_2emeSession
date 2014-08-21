<?php
  $incmap=""; 
  $incprofil=""; 
  $inctitle = " - Login";
  include "template/header.php";  
  include 'functions/function.inc.php';
  include "functions/login.inc.php";
?>
<body class="index">
  <div class="logo">
  </div>
  <div id="accordian">
      <form method="POST" action="login.view.php">
            <ul>
                <li>
                  <h1>Se connecter</h1>
                </li>
                <li>
                  <?php if( isset( $errors['username'] ) ) echo message_erreur($errors, 'username'); ?>
                  <input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php if(!empty( $_POST['username'])) echo $_POST['username']; ?>" class="normal-input"/>
                </li>
                <li>
                  <?php if( isset( $errors['password'] ) ) echo message_erreur($errors, 'password'); ?>
                  <input type="password" placeholder="Mot de passe" name="password" value="<?php if(!empty( $_POST['password'])) echo $_POST['password']; ?>" class="normal-input"/>
                </li>
                <li>
                  <a href="register.view.php" class="register">Pas de compte? Inscris-toi</a>
                  <input type='submit' value='Connexion' name="submit" class="save-info"/>
                </li>
                <li>
                  <a href="preparatifs.view.php"   class="register">Continue sans te connecter -></a>
                </li>
            </ul>
      </form>
  </div>
<?php 
  $incmap=""; $incprofil=""; $incfooter = "";
  include "template/footer.php";  
?>