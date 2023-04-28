<?php
#signup.php
require_once "../cfg/config.php";


if (empty($_POST['email']) or empty($_POST['password'])) {
    $_SESSION['error'] = "erreur champ vide";
    header('Location: ../signup.php');
    exit();
}

$sql = "SELECT email FROM user WHERE email=:email";
$pre = $pdo->prepare($sql);
$pre->bindParam("email", $_POST['email']);
$pre->execute();
$check = $pre->fetch(PDO::FETCH_ASSOC);

if (!empty($check)) {
    $_SESSION['error'] = "utilisateur déjà inscrit";
    header('Location: ../signup.php');
} else {
    //On écrit la requête sans entrer les valeurs directement dans la variable
    //Dans le but de se protéger des injections SQL
    $passwordhash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user(email,password) VALUES(:email,:password)";
    //On prépare la requête
    $pre = $pdo->prepare($sql);
    //On va bind les valeurs avec la fonction bindParam
    $pre->bindParam("email", $_POST['email']);
    $pre->bindParam("password", $passwordhash);
    //On execute la requête
    $pre->execute();
    header('Location: seconnecter.php'); //on le redirige sur la page d'accueil du site !
}


?>