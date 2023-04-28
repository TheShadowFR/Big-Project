<?php
require_once "../cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
    header('Location: index.php');
    exit();
}

print_r($_FILES);
move_uploaded_file($_FILES['imgparallax']['tmp_name'], "../img/" . $_FILES['imgparallax']['name']);
$imgparallax = "img/" . $_FILES['imgparallax']['name'];
move_uploaded_file($_FILES['p1img']['tmp_name'], "../img/" . $_FILES['p1img']['name']);
$p1img = "img/" . $_FILES['p1img']['name'];
move_uploaded_file($_FILES['p2img']['tmp_name'], "../img/" . $_FILES['p2img']['name']);
$p2img = "img/" . $_FILES['p2img']['name'];


$sql = "UPDATE home SET imgparallax =:imgparallax,title = :title,titledescription = :titledescription,description = :description,p1img = :p1img,p1name = :p1name,p1class = :p1class,p1titledescription1 = :p1titledescription1,p1description1 = :p1description1,p1titledescription2 = :p1titledescription2,p1description2 = :p1description2,p1titledescription3 = :p1titledescription3,p1description3 = :p1description3,p2img = :p2img,p2name = :p2name,p2class = :p2class,p2titledescription1 = :p2titledescription1,p2description1 = :p2description1,p2titledescription2 = :p2titledescription2,p2description2 = :p2description2,p2titledescription3 = :p2titledescription3,p2description3 = :p2description3,ps = :ps,titleform = :titleform";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("imgparallax", $imgparallax);
$pre->bindParam("title", $_POST['title']);
$pre->bindParam("titledescription", $_POST['titledescription']);
$pre->bindParam("description", $_POST['description']);
$pre->bindParam("p1img", $p1img);
$pre->bindParam("p1name", $_POST['p1name']);
$pre->bindParam("p1class", $_POST['p1class']);
$pre->bindParam("p1titledescription1", $_POST['p1titledescription1']);
$pre->bindParam("p1description1", $_POST['p1description1']);
$pre->bindParam("p1titledescription2", $_POST['p1titledescription2']);
$pre->bindParam("p1description2", $_POST['p1description2']);
$pre->bindParam("p1titledescription3", $_POST['p1titledescription3']);
$pre->bindParam("p1description3", $_POST['p1description3']);
$pre->bindParam("p2img", $p2img);
$pre->bindParam("p2name", $_POST['p2name']);
$pre->bindParam("p2class", $_POST['p2class']);
$pre->bindParam("p2titledescription1", $_POST['p2titledescription1']);
$pre->bindParam("p2description1", $_POST['p2description1']);
$pre->bindParam("p2titledescription2", $_POST['p2titledescription2']);
$pre->bindParam("p2description2", $_POST['p2description2']);
$pre->bindParam("p2titledescription3", $_POST['p2titledescription3']);
$pre->bindParam("p2description3", $_POST['p2description3']);
$pre->bindParam("ps", $_POST['ps']);
$pre->bindParam("titleform", $_POST['titleform']);

// $pre->bindParam("descriptiond", $_POST['description']);
//On execute la requête
$pre->execute();
header('Location:../adminhome.php');
?>