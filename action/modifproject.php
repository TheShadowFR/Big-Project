<?php
require_once "../cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
    header('Location: index.php');
    exit();
}


$sql = "UPDATE projets SET 
`catégorie` = :catégorie,
`carousel-img1` = :carousel_img1,
`carousel-img2` = :carousel_img2,
`carousel-img3` = :carousel_img3,
`title` = :title,
`tech-img1` = :tech_img1,
`tech-title1` = :tech_title1,
`tech-text1` = :tech_text1,
`tech-img2` = :tech_img2,
`tech-title2` = :tech_title2,
`tech-text2` = :tech_text2,
`tech-img3` = :tech_img3,
`tech-title3` = :tech_title3,
`tech-text3` = :tech_text3,
`details-img1` = :details_img1,
`details-title1` = :details_title1,
`details-text1` = :details_text1,
`details-img2` = :details_img2,
`details-title2` = :details_title2,
`details-text2` = :details_text2,
`details-img3` = :details_img3,
`details-title3` = :details_title3,
`details-text3` = :details_text3
WHERE id = :id
";



//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("catégorie", $_POST['catégorie']);
$pre->bindParam("carousel_img1", $_POST['carousel-img1']);
$pre->bindParam("carousel_img2", $_POST['carousel-img2']);
$pre->bindParam("carousel_img3", $_POST['carousel-img3']);
$pre->bindParam("title", $_POST['title']);
$pre->bindParam("tech_img1", $_POST['tech-img1']);
$pre->bindParam("tech_title1", $_POST['tech-title1']);
$pre->bindParam("tech_text1", $_POST['tech-text1']);
$pre->bindParam("tech_img2", $_POST['tech-img2']);
$pre->bindParam("tech_title2", $_POST['tech-title2']);
$pre->bindParam("tech_text2", $_POST['tech-text2']);
$pre->bindParam("tech_img3", $_POST['tech-img3']);
$pre->bindParam("tech_title3", $_POST['tech-title3']);
$pre->bindParam("tech_text3", $_POST['tech-text3']);
$pre->bindParam("details_img1", $_POST['details-img1']);
$pre->bindParam("details_title1", $_POST['details-title1']);
$pre->bindParam("details_text1", $_POST['details-text1']);
$pre->bindParam("details_img2", $_POST['details-img2']);
$pre->bindParam("details_title2", $_POST['details-title2']);
$pre->bindParam("details_text2", $_POST['details-text2']);
$pre->bindParam("details_img3", $_POST['details-img3']);
$pre->bindParam("details_title3", $_POST['details-title3']);
$pre->bindParam("details_text3", $_POST['details-text3']);
$pre->bindParam("id", $_POST['id']);




// $pre->bindParam("descriptiond", $_POST['description']);
//On execute la requête
$pre->execute();
header('Location:../adminProjet.php');
?>