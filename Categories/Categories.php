<?php
    session_start();
    if(isset($_GET['deconnect'])){
      session_destroy();
      
      header('location: ../index.php');
    }
    
  

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="icon" type="image/png" href="icon.png" />

      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />


<style>
div.gallery1 {
  border: 1px solid #ccc;
  transform: translateY(3%);
}

div.gallery1:hover {
  border: 1px solid #777;
}

div.gallery1 img {
  width: 100%;
  height: auto;
}

div.gallery {
  border: 1px solid #ccc;
  transform: translateY(3%);
}

div.gallery:hover {
  border: 1px solid #777;

}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 25%;
}


.active {
  background-color: #000000;
}



body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 10px;
}
  #tst1{
  font-family:BERNARD MT;
    font-weight: bold;
     text-align: center;
    font-size: 30px;
}
.jumbotron
{
  background:url(gg.jpg);
  background-opacity: 0.60;

}
#x1{
font-family:BERNARD MT;
    font-weight: bold;
     text-align: center;
    font-size: 30px;
}




</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
        <div class="navbar-header">
      <a class="navbar-brand" ><a href="Acceuil.php"><img src="logo.png"   style="width: 180px;"></a>
    </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link" href="Acceuil.php">ACCEUIL</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Acceuil.php">Villes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Categories/Categories.php">Recettes</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contact/Contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">A propos</a></li>
                </ul> 
                <ul class="navbar-nav text-uppercase ml-auto">
                      <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas lo fa-user-alt" style="cursor: pointer;"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <p class="dropdown-item" style="cursor: pointer;"><?php echo $_SESSION['name'] ; ?></p>
                          <?php
                          if($_SESSION['etat']=="admin"){
                            echo '<a class="dropdown-item" href="./Administation/Administrateur.php" style="cursor: pointer;">Espace Administrateur</a>';
                          }
                      ?>
                          <a class="dropdown-item" href="./Profil/Connection.php" style="cursor: pointer;">Parametres du compte</a>
                          <a class="dropdown-item" href="?deconnect=off" style="cursor: pointer;">Se deconnecter</a>
                        </div>
                      </div>
                
                </ul>
                
            </div>
        </div>
    </nav>
 <div id=tst1>
     <div class="jumbotron" style="margin-top: 80px">
            <p>
             OSEZ LE FAIT-MAISON <br> ECHANGEZ <span style="color:#FCCD45">LES RECETTES</span> FACILES <br>  ET <span style="color:#FCCD45">LES CONSEILS </span> CUISINE </p>
          
     </div>      
     </div>




      <div class="" id="x1" >
           <h1>CATEGORIES</h1>
      </div>
    	

      <!--gallery1-->

<div class="container" >
          <div class="responsive">
            <div class="gallery1">
              <a href="Recettes.php?recette=Plat">
                <img src="pg.jpg" alt="OG" width="600" height="400">
              </a>
            <div class="desc">PLAT</div>
              </div>
          </div>


          <div class="responsive">
            <div class="gallery1">
              <a  href="./Recettes.php?recette=Smoothie">
                <img src="b.jpg" alt="AB" width="600" height="400">
              </a>
              <div class="desc">SMOOTHIE</div>
            </div>
          </div>

          <div class="responsive">
            <div class="gallery1">
              <a href="./Recettes.php?recette=Salade">
                <img src="s.jpg" alt="EN" width="600" height="400">
              </a>
              <div class="desc">SALADE</div>
            </div>
          </div>

          <div class="responsive">
            <div class="gallery1">
              <a  href="./Recettes.php?recette=Dessert">
                <img src="d.jpg" alt="C" width="600" height="400">
              </a>
              <div class="desc">DESSERT</div>
            </div>
          </div>
          <div class="mt-5">
            <center ><button class="btn  btn-primary mt-5 " ><a href="../Deposer/Depo.php" style="text-decoration: none;color:white;font-size:4vh;">Deposer une recette</a></button> </center>
          </div>
</div>


<br><br>
<!--footer section -->
<footer class="site-footer mt-5" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>OBJECTIFS</h6>
            <p class="text-justify">
              Notre projet <span style="font-weight: bold; color: #FCCD45;">TastyMakla </span>est un site qui a comme mission principale :
              Dénicher les bons coins où sortir et principalement où manger, 
              et ce, adapté à tous les budgets et tous les goûts. 
              A travers des photos, des revues objectives, nous aiderons nos visiteurs 
              à choisir LE restaurant.
              Ainsi qu'un espace sera dedié aux recettes fait maison.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Liens</h6>
            <ul class="footer-links">
              <li><a href="../Acceuil.php">ACCEUILS</a></li>
              <li><a href="../Acceuil.php">VILLES</a></li>
              <li><a href="../Categories/Categories.php">RECETTES</a></li>
              <li><a href="../Contact/Contact.php">CONTACT</a></li>
              <li><a href="#about">A PROPOS</a></li>
            </ul>
          </div>
          
          <div class="col-xs-6 col-md-3">
            <h6>CONTACTS</h6>
            <ul class="footer-links">
              <li> <span><i class="fas fa-phone"></i> &nbsp; 0678367437</span></li>
              <li> <span><i class="fas fa-envelope"></i> &nbsp; tastymakla@gmail.com</span></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">TastyMakla</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="github" href="#"><i class="fab fa-github"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>