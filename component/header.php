<header class="container-lg container-color d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border border-dark border-5 rounded">
        <?php
        $sql = "SELECT * FROM projets";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

        
        ?>
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="index.php" class="nav-link px-4 fs-3 text-black fw-bold">Accueil</a>
        </div>
        
        
        <ul class="nav col-12 col-md-auto mb-4 justify-content-center mb-md-0">
          <button class="btn btn-black fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Projets</button>
          <li><a href="cv.php" class="nav-link px-4">CV</a></li>
          <div class="offcanvas container-color offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasTopLabel">Projets</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="row row-cols-1 row-cols-md-3 gx-4 text-center">
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Année 1</h4>
                  <a href="projets.php">Projets</a>
                  <?php
                      $hasProjectA1 = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "a1"){
                            $hasProjectA1 = true;
                  ?>      
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
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
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Année 2</h4>
                  <?php
                      $hasProjectA2 = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "a2"){
                            $hasProjectA2 = true;
                  ?>      
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
                  <?php
                          }
                      }
                      if ($hasProjectA2 == false){
                        ?>
                        <h5>A venir...</h5>
                        <?php
                      }
                  ?>
                </div>
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Année 3</h4>
                  <?php
                      $hasProjectA3 = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "a3"){
                            $hasProjectA3 = true;
                  ?>
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
                  <?php
                          }
                      }
                      if ($hasProjectA3 == false){
                        ?>
                        <h5>A venir...</h5>
                        <?php
                      }
                  ?>
                </div>
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Année 4</h4>
                  <?php
                      $hasProjectA4 = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "a4"){
                            $hasProjectA4 = true;
                  ?>
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
                  <?php
                          }
                      }
                      if ($hasProjectA4 == false){
                        ?>
                        <h5>A venir...</h5>
                        <?php
                      }
                  ?>
                </div>
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Année 5</h4>
                  <?php
                      $hasProjectA5 = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "a5"){
                            $hasProjectA5 = true;
                  ?>
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
                  <?php
                          }
                      }
                      if ($hasProjectA5 == false){
                        ?>
                        <h5>A venir...</h5>
                        <?php
                      }
                  ?>
                </div>
                <div class="col col-xs-12 col-sm-12 themed-grid-col">
                  <h4>Extra-scolaire</h4>
                  <?php
                      $hasProjectAutre = false;
                      foreach($projects as $project){
                          if($project['catégorie'] == "autre"){
                            $hasProjectAutre = true;
                  ?>
                          <li><a href="projets.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></li>
                  <?php
                          }
                      }
                      if ($hasProjectAutre == false){
                        ?>
                        <h5>A venir...</h5>
                        <?php
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <li><a href="Jeux.php" class="nav-link color-black px-4">Jeux</a></li>
          <li><a href="contact.php" class="nav-link px-4">Contact</a></li>
        </ul>
  
        <div class="col-md-3 d-flex flex-row-reverse text-end">
          <?php require_once "action/verifuser.php"; ?>
        </div>
        
    </header>