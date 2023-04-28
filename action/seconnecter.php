<?php
require_once "../cfg/config.php";

if (empty($_POST['email']) or empty($_POST['password'])) {
    $_SESSION['error'] = "Erreur champs vides";
    header('Location: ../login.php');
    exit();
}

$sql = "SELECT * FROM user WHERE email=:email";
$pre = $pdo->prepare($sql);
$pre->bindParam("email", $_POST['email']);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);

if (password_verify($_POST['password'], $user['password'])) {
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location: ../index.php'); //on le redirige sur la page d'accueil du site !
} else {
    $_SESSION['error'] = "Email ou mots de passe érroné";
    header('Location: ../login.php');
}
?>