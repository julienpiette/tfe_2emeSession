<?php 
  $incprofil = "<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js'></script>
  <script src='assets/js/apptodo.js'></script>";
  $inctitle = " - Profil";
  $incmap = "";
  include "template/header.php";

  if (empty($_SESSION['username'])) {
    $username = "Voyageur";
    $linkConnexion = "Connexion";
  } else {
    $username = $_SESSION['username']; 
    $linkConnexion = "Déconnexion";
    };

  if (isset($_SESSION['username'])) {
  } else {
    echo '<script>window.location = "login.view.php";</script>';
  }
?>

  <body class="profil" ng-app>
                        <!-- ---------------------------------------------------- -->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <a href="preparatifs.view.php"  id="showLeft"><h5>SILVA<span class="glyphicon"></span></h5></a>
      <div id="accordian">
          <ul>
              <li><h3><?php echo $username ?></h3></li>
              <li class="modal-open">
                <?php
                  $docs = array_diff(scandir("users/images-profil/".$_SESSION["username"]), array('..', '.'));
                  $file = $docs[2];
                ?>
                <img src="users/images-profil/<?php echo $_SESSION["username"].'/'.$file; ?>" alt="profil-photo" width="80" height="80" class="pull-left profil-pic">
              </li>
              <li>
                <h3 class="parametres">Historique</h3>
                <h3 class="parametres">Paramètres</h3>
              </li>
          </ul>
      </div>
    </nav>
                        <!-- ---------------------------------------------------- -->
  <div id="content-float">
                        <!-- ---------------------------------------------------- -->
    <header class="navigation">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <p>Menu</p>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="preparatifs.view.php">Préparatifs</a></li>
              <li><a href="places.view.php">Lieux</a></li>
              <li><a href="legislation.view.php">Législation</a></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenue ".$username; ?></a>
                <ul class="dropdown-menu">
                  <div class="arrow"></div>
                  <li><a href="profil.view.php">Profil</a></li>
                  <li><a href="functions/logout.inc.php"><?php echo $linkConnexion; ?></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
                        <!-- ---------------------------------------------------- -->
      <div class="global">
        <div class="container todolist-content show"  ng-controller="TodoCtrl">
            <div class="img"><h4><span>1</span><br>Ma checklist</h4></div>
            <div class="row">
                <div class="col-12">
                    <h1>À ne pas oublier</h1>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{progressbarItem()}}" aria-valuemin="0" aria-valuemax="100" style="width: {{progressbarItem()}}%;">
                                    {{okItem()}}/{{countItem()}}
                                </div>
                            </div>
                            </tr>
                            <tr>
                                <form ng-submit="addItem()">
                                    <div class="form-group">
                                        <input  class="form-control" type="text" ng-model="itemEntry" placeholder="Écris les choses à ne pas oublier puis appuye sur 'ENTER'" autofocus>
                                    </div>
                                </form>                      
                            </tr> 
                            <tr class="{{isTodo(item.todo)}}" ng-repeat="item in items">
                                <td>{{item.text}} <input type="checkbox" id="item-{{item.id}}" ng-model="item.todo"></td>
                            </tr>
                        </tbody>               
                    </table>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                        <button id="clearTodo" class="btn btn-primary btn-lg btn-block btn-danger" ng-click="clearTodo()">Supprime ta sélection</button>
                        </tr>
                        </tbody>               
                    </table>               
                </div>
            </div>
        </div><!-- END CONTAINER -->

<?php $incmap=""; $incprofil="";
  $incfooter = '<footer>
  <p>Conçu et développé par <a href="http://julienpiette.be">Julien Piette</a><span></span><a href="credits.view.php">Crédits</a></p>
  <div class="pull-right">
    <a class="icon-footer" target="_blank" href="mailto:julienpiette.web@gmail.com">Mail</a>
    <a class="icon-footer" target="_blank" href="https://twitter.com/webulien">Twitter</a>
  </div>
</footer>
</div> <!-- END GLOBAL -->
</div><!-- END CONTENT-FLOAT -->';

 include "template/footer.php";  ?>