<!doctype html>
<html lang="fr">
  <head>
    <?php require_once "cfg/config.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="container-fluid banner p-3">
      <!-- header -->
      <?php require_once "component/header.php";?>
        <!-- end header  -->
        <!-- banner -->
      <banner class="container-fluid p-3">
          <div class="banner-title align-items-center d-flex justify-content-center container-sm text-center border rounded border-dark border-5">
            <h1 class="ml2">Mon site !!!</h1>
          </div>
      </banner>

        <!-- end banner -->
        <!-- section -->
      <section class="container-fluid align-items-center d-flex justify-content-center">
        <div class="section text-center container-color container-fluid rounded border border-dark border-5">
          <div class="container-sm p-3">
            <h3>Voici mon site web !</h3>
          </div>
          <div class="container-sm p-3">
            <h4>Vous trouverez sur ce site:</h4>
          </div>
          <div class="row row-cols-1 row-cols-md-4 gx-4 text-center">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 p-3 themed-grid-col">
              <div class="card">
                <img src="img/logo_guardia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mes projets</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 p-3 themed-grid-col">
              <div class="card">
                <img src="img/cv.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mon CV</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 p-3 themed-grid-col">
              <div class="card">
                <img src="img/logo_game.jpg" class="card-img-top" alt="...">
              
                <div class="card-body">
                  <h5 class="card-title">Des jeux</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 p-3 themed-grid-col">
              <div class="card">
                <img src="img/logo_msg.jpg" class="card-img-top" alt="...">
              
                <div class="card-body">
                  <h5 class="card-title">Me contacter</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>   
      </section>
      
        <!-- end section -->
        <!-- footer -->
      <?php require_once "component/footer.php";?>
        <!-- end footer -->
    </div>
    
<!-- A____A
    |・ㅅ・|
    |っ　ｃ|
    |　　　|
    |　　　|
    |　　　|
    |　　　|
    |　　　|
     U￣￣U -->
  </body>
  
</html>
