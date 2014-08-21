<?php 
  $inctitle = " - Places";
  $incprofil = "";
  $incmap = "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places'></script>
            <script type='text/javascript' src='assets/js/stylemap.js'></script><!--MAP-GOOGLE-->";
  include "template/header.php";
  
if (empty($_SESSION['username'])) {
    $username = "Voyageur";
    $linkConnexion = "Connexion";
  } else {
    $username = $_SESSION['username']; 
    $linkConnexion = "Déconnexion";
    };
?>

<body class="places" onload="initialize()">

    <nav class="cbp-spmenu cbp-spmenu-vertical" id="cbp-spmenu-s1">
      <a href="preparatifs.view.php"  id="showLeft"><h5>SILVA<span class="glyphicon"></span></h5></a>
      <div id="accordian">
        <form method="POST" action="functions/places/save-places.inc.php" id="mapForm">
          <ul>
              <li class="fieldContainer">
                <h3>Titre</h3>
                <input type="text" name="titre" class="normal-input titre"/>
              </li>
              <li class="fieldContainer">
                <h3>Description</h3>
                <textarea name="description"  class="normal-input content"></textarea>

                <div id="upload-file-container">
                  <input type="file" name="photo" id="imageupload">
                </div>

              </li>
              <li class="fieldContainerloc">
                <h3>Localisation</h3>
                <p class="drag-info">Place ton marqueur en double cliquant sur la map</p>
              </li >
              <li class="fieldContainersub">
              <input type='submit' value='Sauvegarder' name="submit" class="save-info"/>
              </li>
          </ul>
        </form>
      </div>
    </nav>

    <div id="content-float">
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
                  <li class="active"><a href="places.view.php">Lieux</a></li>
                  <li><a href="legislation.view.php">Législation</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Bienvenue ".$username; ?></a>
                    <ul class="dropdown-menu">
                      <div class="arrow"></div>
                      <li><a href="profil.view.php" class="arrow-hover">Profil</a></li>
                      <li><a href="functions/logout.inc.php"><?php echo $linkConnexion; ?></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
    </div><!-- END CONTENT-FLOAT -->
              <!-- ---------------------------------------------------- -->
    <input id="pac-input" class="controls" type="text" placeholder="Enter a location"/>
    <div id="map-canvas">
    </div>

<script type="text/javascript">

  $('#mapForm').on("submit",(function(e){
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("lat", markerpos.position.k);
    formData.append("lng", markerpos.position.B); 

    console.log(markerpos.position);

    $.ajax({
      type:"POST",
      url:"functions/places/save-places.inc.php",
      // data:"titre="+titre+"&content="+content+"&lat="+lat+"&lng="+lng,
      data: formData,
      contentType:false,
      cache:false,
      processData: false,
      success:function(data){
        location.reload();
        console.log(data);
      }
    });
  }));

</script>

<?php $incmap=""; $incprofil="";
  $incfooter = "";

 include "template/footer.php";  ?>