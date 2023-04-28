<?php
require_once "../cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
    header('Location: index.php');
    exit();
}

$sql = "INSERT INTO `projets` (`id`, `catégorie`, `carousel-img1`, `carousel-img2`, `carousel-img3`, `title`, `tech-img1`, `tech-title1`, `tech-text1`, `tech-img2`, `tech-title2`, `tech-text2`, `tech-img3`, `tech-title3`, `tech-text3`, `details-img1`, `details-title1`, `details-text1`, `details-img2`, `details-title2`, `details-text2`, `details-img3`, `details-title3`, `details-text3`) VALUES (NULL, 'test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On execute la requête
$pre->execute();
header('Location:../administration.php'); //on le redirige sur la page d'accueil du site !



?>