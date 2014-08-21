<?php 
  $incmap=""; 
  $incprofil=""; 
  $inctitle = " - Register";
  include "template/header.php"; 
  include 'functions/function.inc.php';
  include 'functions/register.inc.php';  
?>
<body class="index">
  <div class="logo">
  </div>
  <div id="accordian">
      <form method="POST" action="register.view.php" enctype="multipart/form-data">
            <ul>
                <li>
                  <h1>Inscription</h1>
                </li>

                <li>
                  <?php if( isset( $errors['username'] ) ) echo message_erreur($errors, 'username'); ?>
                  <input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>" class="normal-input"/>
                </li>
                <li>
                  <?php 
                   if(isset($errors['size'])) echo message_erreur($errors,'size'); 
                   if(isset($errors['type'])) echo message_erreur($errors,'type'); 
                   ?>
                  <div id="upload-file-container">
                    <input type="file" name="myimg">
                  </div>
                </li>
                <li>
                  <?php if(isset($errors['password'])) echo message_erreur($errors, 'password'); ?>
                  <input type="password" placeholder="Mot de passe" name="password" value="<?php if(!empty($_POST['password'])) echo $_POST['password']; ?>" class="normal-input"/>
                </li>
                <li>
                  <?php if(isset($errors['repeatpassword'])) echo message_erreur($errors, 'repeatpassword'); ?>
                  <input type="password" placeholder="Répeter le mot de passe" name="repeatpassword" value="<?php if(!empty($_POST['repeatpassword'])) echo $_POST['repeatpassword']; ?>" class="normal-input"/>
                </li>
                <li>

                  <a href="login.view.php" class="register">Déjà un compte? Connecte-toi</a>
                  <input type='submit' value="S'inscrire" name="submit" class="save-info"/>
                </li>
            </ul>
        </form>
  </div>
<?php 
  $incmap=""; $incprofil="";$incfooter = ""; 
  include "template/footer.php";  
?>