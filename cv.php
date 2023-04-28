<!doctype html>
<html lang="fr">

<head>
    <?php require_once "cfg/config.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>




<body class="container-fluid banner p-3">
    <?php
    $sql = "SELECT * FROM cv";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $cv = $pre->fetch(PDO::FETCH_ASSOC);
    ?>
    <!-- header -->
    <?php require_once "component/header.php";?>
    <!-- end header -->
    <main class="container-fluid py-3 my-4">
        <!-- Jeux -->
        <div class="container-lg text-center rounded p-3 bg-secondary">
            <div>
                <h1>CV</h1>
            </div>
            <div>
                <h2>Sur cette page vous pouvez trouver mon CV:</h2>
            </div>
            <div class="container technologie rounded bg-secondary">
              <embed src="<?php echo $cv['doc'] ?>" style="width: 100%;" class="full-height" type="application/pdf"/>
            </div>
          
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