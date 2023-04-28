<?php
require_once "cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
  header('Location: index.php');
  exit();
}
?>

<!doctype html>
<html lang="fr">
  <head>
    <?php require_once "cfg/config.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body  class=" d-flex justify-content-center" >
    <?php
    $sql = "SELECT * FROM cv";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $cvContent = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM jeux";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $jeuxContent = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $usersList = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM contact";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $contactContent = $pre->fetchAll(PDO::FETCH_ASSOC);

    $sql = "SELECT * FROM projets";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $projetsList = $pre->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <section class="container bg-secondary text-center rounded m-5 p-5 color-black">
      <a href="index.php" class="btn btn-primary">Accueil</a>
      <h1>Page d'administration</h1>
      <div class="row">
        <div class="col-sm-5 col-md-6">
          <div class="container-fluid m-3 bg-secondary rounded border">
            <h2>CV</h2>
            <?php
              foreach ($cvContent as $cv) {
                ?>
                <li>
                  <a>
                    id: <?php echo $cv['id'] ?> |
                  </a>
                  <a>
                    <?php echo $cv['doc'] ?>
                  </a>
                  
                </li>
      
                <form method="post" action="action/deleteCV.php">
                  <input type="hidden" name="id" value="<?php echo $cv["id"] ?>" />
                  <button type="submit">Supprimer CV</button>
                </form>
                <form method="post" action="action/ajouterCV.php">
                  <input type="hidden" name="id" value="<?php echo $cv["id"] ?>" />
                  <input type="text" name="doc">
                  <button type="submit">Ajouter CV</button>
                </form>
                <?php
              } ?>
          </div>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="container-fluid m-3 bg-secondary rounded border">
            <h2>Jeux</h2>
            <?php
              foreach ($jeuxContent as $jeu) {
                ?>
                <li>
                  <a>
                    id: <?php echo $jeu['id'] ?> |
                  </a>
                  <a>
                    <?php echo $jeu['jeux'] ?>
                  </a>
                  
                </li>
      
                <form method="post" action="action/deleteJeu.php">
                  <input type="hidden" name="id" value="<?php echo $jeu["id"] ?>" />
                  <button type="submit">Supprimer jeu</button>
                </form>
                <form method="post" action="action/ajouterJeu.php">
                  <input type="hidden" name="id" value="<?php echo $jeu["id"] ?>" />
                  <input type="text" name="doc">
                  <button type="submit">Ajouter jeu</button>
                </form>
                <?php
              } ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-5 col-lg-6">
          <div class="container-fluid m-3 bg-secondary rounded border">
            <h2>Users</h2>
            <?php
            foreach ($usersList as $user) { ?>
              <div class="bloc_user">
                <span class="email"><?php echo $user['email'] ?></span>
                <span class="admin">Admin: <?php echo $user['admin'] == 1 ? "oui" : "non" ?></span>
                <form method="post" action="action/deleteuser.php">
                  <input type="hidden" name="id" value="<?php echo $user["id"] ?>" />
                  <button type="submit">Supprimer utilisateur</button>
                </form>
                <form method="post" action="action/giveadminright.php">
                  <input type="hidden" name="admin" value="<?php echo $user["admin"] == 1 ? 0 : 1 ?>" />
                  <input type="hidden" name="id" value="<?php echo $user["id"] ?>" />
                  <button type="submit">
                    <?php echo $user["admin"] == 1 ? "Enlever droit admin" : "Donner droit admin" ?>
                  </button>
                </form>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
          <div class="container-fluid m-3 bg-secondary rounded border">
            <h2>Message</h2>
            <?php
            foreach ($contactContent as $message) {
              ?>
              <li>
                <a>
                  <?php echo $message['email'] ?> |
                </a>
                <a>
                  <?php echo $message['message'] ?>
                </a>
                
              </li>
              <?php
            } ?>
          </div>
        </div>
      </div>
      <div class="container-lg m-3 bg-secondary rounded border">
        <h2>Projets</h2>
        <div class="container text-center">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <div class="col">
              <h3>Année 1</h3>
              <?php
                  $hasProjectA1 = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] == "a1"){
                        $hasProjectA1 = true;
              ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectA1 == false){
                    ?>
                    <h5>A venir...</h5>
                    
                    <?php
                  }
              ?>
            </div>
            <div class="col">
            <h3>Année 2</h3>
            <?php
            $hasProjectA2 = false;
            foreach($projetsList as $project){
                if($project['catégorie'] == "a2"){
                  $hasProjectA2 = true;
        ?>      
                <li>
                  <a>
                    id: <?php echo $project['id'] ?> |
                  </a>
                  <a>
                    <?php echo $project['title'] ?>
                  </a>
                </li>
                <form method="post" action="action/deleteproject.php">
                  <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                  <button type="submit">Supprimer</button>
                  <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                </form>
        <?php
                }
            };
            if ($hasProjectA2 == false){
              ?>
              <h5>A venir...</h5>
              
              <?php
            }
        ?>
            </div>
            <div class="col">
            <h3>Année 3</h3>
            <?php
                  $hasProjectA3 = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] == "a3"){
                        $hasProjectA3 = true;
              ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectA3 == false){
                    ?>
                    <h5>A venir...</h5>
                    
                    <?php
                  }
              ?>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <div class="col">
            <h3>Année 4</h3>
            <?php
                  $hasProjectA4 = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] == "a4"){
                        $hasProjectA4 = true;
              ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectA4 == false){
                    ?>
                    <h5>A venir...</h5>
                    
                    <?php
                  }
              ?>
            </div>
            <div class="col">
            <h3>Année 5</h3>
            <?php
                  $hasProjectA5 = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] == "a5"){
                        $hasProjectA5 = true;
              ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectA5 == false){
                    ?>
                    <h5>A venir...</h5>
                    
                    <?php
                  }
              ?>
            </div>
            <div class="col">
            <h3>Extra-scolaire</h3>
              <?php
                  $hasProjectAutre = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] == "autre"){
                        $hasProjectAutre = true;
                      ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectAutre == false){
                    ?>
                    <h5>A venir...</h5>
                    
                    <?php
                  }
              ?>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h3>Projets en création</h3>
            <?php
                  $hasProjectConstruction = false;
                  foreach($projetsList as $project){
                      if($project['catégorie'] != "autre" && $project['catégorie'] != "a1" && $project['catégorie'] != "a2" && $project['catégorie'] != "a3" && $project['catégorie'] != "a4" && $project['catégorie'] != "a5"){
                        $hasProjectConstruction = true;
              ?>      
                      <li>
                        <a>
                          id: <?php echo $project['id'] ?> |
                        </a>
                        <a>
                          <?php echo $project['title'] ?>
                        </a>
                      </li>
                      <form method="post" action="action/deleteproject.php">
                        <input type="hidden" name="id" value="<?php echo $project["id"] ?>" />
                        <button type="submit">Supprimer</button>
                        <a href="adminProjet.php?id=<?php echo $project['id'] ?>">Modifier</a>
                      </form>
              <?php
                      }
                  };
                  if ($hasProjectConstruction == false){
                    ?>
                    <h5>Aucun projet en construction</h5>
                    
                    <?php
                  }
              ?>
              <a href="action/addProjet.php" class="btn btn-primary">Ajouter</a>
          </div>
        </div>
      </div>
    
    </section>
    

    <!-- </section> -->

    
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
  </body>
  
</html>