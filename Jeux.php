<!doctype html>
<html lang="fr">

  <head>
      <?php require_once "cfg/config.php";?>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Jeux</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript" src="js/brython.js"></script>
      <script type="text/javascript" src="js/brython_stdlib.js"></script>
  </head>




  <body class="container-fluid banner p-3" onload="brython()">
    <!-- header -->
    <?php require_once "component/header.php";?>
    <!-- end header -->
    <main class="container-fluid py-3 my-4">
      <!-- Jeux -->
      <div class="container-lg text-center rounded bg-secondary">
        <div>
            <h1>Jeux</h1>
        </div>
        <div>
            <h2>Sur cette page vous pouvez jouer à divers jeu tel que:</h2>
        </div>
        
        <section class="p-3">
          <input id="zone">
          <button id="echo">click !</button>
          <script type="text/python3">
          from browser import document
          from browser.widgets.dialog import InfoDialog

          def click(ev):
              InfoDialog("Hello", f"Bonjour, {document['zone'].value} !")

          # associe une fonction à l'événement "click" sur le bouton
          document["echo"].bind("click", click)
          </script>
          
        </section>
      </div>
        <!-- /END Jeux -->

        
        <!-- FOOTER -->
        <?php require_once "component/footer.php";?>
        <!-- end Footer -->
    </main>


    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
  </body>
  

  
</html>