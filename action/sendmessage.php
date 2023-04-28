<?php
#signup.php
require_once "../cfg/config.php";


if (empty($_POST['email']) or empty($_POST['message'])) {
    $_SESSION['error'] = "erreur champ vide";
    header('Location: ../contact.php');
    exit();
}

//On écrit la requête sans entrer les valeurs directement dans la variable
//Dans le but de se protéger des injections SQL

$sql = "INSERT INTO contact(email,message) VALUES(:email,:message)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("email", $_POST['email']);
$pre->bindParam("message", $_POST['message']);
//On execute la requête
$pre->execute();
header('Location: ../contact.php'); //on le redirige sur la page d'accueil du site !



?>