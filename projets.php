<!doctype html>
<html lang="fr">

<head>
    <?php require_once "cfg/config.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projets</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>




<body class="container-fluid banner p-3">
  
    <!-- header -->
    <?php 
    require_once "component/header.php";
    $sql = "SELECT * FROM projets WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->bindParam("id", $_GET['id']);
    $pre->execute();
    $projectscontents = $pre->fetch(PDO::FETCH_ASSOC);
    ?>
    <!-- end header -->
    <!-- carousel -->
    <main>

        <div class="container containercarousel p-3">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo $projectscontents['carousel-img1'] ?>" class="img-fluid d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo $projectscontents['carousel-img2'] ?>" class="img-fluid d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $projectscontents['carousel-img3'] ?>" class="img-fluid d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        
        <!-- end carousel -->
        <!-- techno -->
        <div class="container technologie rounded bg-secondary">
            <div class="d-flex justify-content-center pt-3">
              <h1><?php echo $projectscontents['title'] ?></h1>
            </div>
            <hr class="featurette-divider">

            <div class="row d-flex justify-content-center align-items-center pt-3">
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="<?php echo $projectscontents['tech-img1'] ?>" class="rounded img-fluid" alt="...">
                      </div>
                    <h2 class="fw-normal"><?php echo $projectscontents['tech-title1'] ?></h2>
                    <p><?php echo $projectscontents['tech-text1'] ?></p>
                    
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="<?php echo $projectscontents['tech-img2'] ?>" class="rounded img-fluid" alt="...">
                      </div>
                    <h2 class="fw-normal"><?php echo $projectscontents['tech-title2'] ?></h2>
                    <p><?php echo $projectscontents['tech-text2'] ?></p>
                    
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="<?php echo $projectscontents['tech-img3'] ?>" class="rounded img-fluid" alt="...">
                    </div>
                    <h2 class="fw-normal"><?php echo $projectscontents['tech-title3'] ?></h2>
                    <p><?php echo $projectscontents['tech-text3'] ?></p>
                    
                </div>
            </div>

            <!-- end techno -->
            <!-- Détails -->
            <section class="bg-secondary pb-3">
                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $projectscontents['details-title1'] ?></h2>
                        <p class="lead"><?php echo $projectscontents['details-text1'] ?></p>
                    </div>
                    <div class="col-md-5">
                        <div class="float-end">
                            <img src="<?php echo $projectscontents['details-img1'] ?>" class="rounded img-fluid" alt="...">
                        </div>
                        
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $projectscontents['details-title2'] ?></h2>
                        <p class="lead"><?php echo $projectscontents['details-text2'] ?></p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <div class="float-start">
                            <img src="<?php echo $projectscontents['details-img2'] ?>" class="rounded img-fluid" alt="...">
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo $projectscontents['details-title3'] ?></h2>
                        <p class="lead"><?php echo $projectscontents['details-text3'] ?></p>
                    </div>
                    <div class="col-md-5">
                        <div class="float-end">
                            <img src="<?php echo $projectscontents['details-img3'] ?>" class="rounded img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </section>
                

            <!-- /END détails -->

        </div>


        <!-- FOOTER -->
        <?php require_once "component/footer.php";?>
        <!-- end Footer -->
    </main>


    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>