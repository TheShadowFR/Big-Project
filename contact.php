<!doctype html>
<html lang="fr">

<head>
    <?php require_once "cfg/config.php";?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>




<body class="container-fluid banner p-3">
    <!-- header -->
    <?php require_once "component/header.php";?>
    <!-- end header -->
    <main class="container-fluid py-3 my-4">
        <!-- Jeux -->
        <div class="container-lg text-center rounded bg-secondary">
            <div>
                <h1>Contact</h1>
            </div>
            <div>
                <h2>Sur cette page vous pourrez trouver de quoi me contacter:</h2>
            </div>  
            <div style="max-width: 500px;" class="container py-4">

              <!-- Bootstrap 5 starter form -->
              <form id="contactForm" method="post" action="action/sendmessage.php" data-sb-form-api-token="API_TOKEN">
            
            
                <!-- Email address input -->
                <div class="mb-3">
                  <label class="form-label" for="emailAddress">Email Address</label>
                  <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address"/>
                </div>
            
                <!-- Message input -->
                <div class="mb-3">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                </div>

            
                <!-- Form submit button -->
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                </div>
            
              </form>
            
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