<!doctype html>
<?php session_start(); ?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="container-fluid banner p-0 full-height d-flex align-items-center justify-content-center h-100">
    <?php if (isset($_SESSION['error'])): ?>
        <div style="color:red">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>
    <!-- <section class="align-middle h-100 w-100 d-flex justify-content-center"> -->
    <section class="container-xs bg-secondary text-center rounded p-5 color-black">
      <form method="post" action="action/enregistrer.php">
        <div class="login f-bold fs-1 pb-3">Sign-up</div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <button type="button submit" class="btn fw-bold btn-outline-black">S'enregistrer</button>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a href="index.php" class="text-reset p-3">Accueil</a>
          <a href="login.php" class="text-reset p-3">Login</a>
        </div>
        
        
      </form>
    </section>
    

    <!-- </section> -->

    
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
  </body>
  
</html>