<?php
require_once "cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
    header('Location: index.php');
    exit();
}
?>
<html>
<?php


$sql = "SELECT * FROM projets WHERE id=:id";
$pre = $pdo->prepare($sql);
$pre->bindParam("id", $_GET['id']);
$pre->execute();
$projectcontent = $pre->fetch(PDO::FETCH_ASSOC);


?>
<h1>Pannel de modification pour: <?php echo $projectcontent['title'] ?></h1>

<form method="post" action="action/modifproject.php?id=<?php echo $projectcontent['id'] ?>">
  <input type="text" name="catégorie" value="<?php echo $projectcontent['catégorie']; ?>" /><br>
  <input type="text" name="carousel-img1" value="<?php echo $projectcontent['carousel-img1']; ?>" /><br>
  <input type="text" name="carousel-img2" value="<?php echo $projectcontent['carousel-img2']; ?>" /><br>
  <input type="text" name="carousel-img3" value="<?php echo $projectcontent['carousel-img3']; ?>" /><br>
  <input type="text" name="title" value="<?php echo $projectcontent['title']; ?>" /><br>
  <input type="text" name="tech-img1" value="<?php echo $projectcontent['tech-img1']; ?>" /><br>
  <input type="text" name="tech-title1" value="<?php echo $projectcontent['tech-title1']; ?>" /><br>
  <input type="text" name="tech-text1" value="<?php echo $projectcontent['tech-text1']; ?>" /><br>
  <input type="text" name="tech-img2" value="<?php echo $projectcontent['tech-img2']; ?>" /><br>
  <input type="text" name="tech-title2" value="<?php echo $projectcontent['tech-title2']; ?>" /><br>
  <input type="text" name="tech-text2" value="<?php echo $projectcontent['tech-text2']; ?>" /><br>
  <input type="text" name="tech-img3" value="<?php echo $projectcontent['tech-img3']; ?>" /><br>
  <input type="text" name="tech-title3" value="<?php echo $projectcontent['tech-title3']; ?>" /><br>
  <input type="text" name="tech-text3" value="<?php echo $projectcontent['tech-text3']; ?>" /><br>
  <input type="text" name="details-img1" value="<?php echo $projectcontent['details-img1']; ?>" /><br>
  <input type="text" name="details-title1" value="<?php echo $projectcontent['details-title1']; ?>" /><br>
  <input type="text" name="details-text1" value="<?php echo $projectcontent['details-text1']; ?>" /><br>
  <input type="text" name="details-img2" value="<?php echo $projectcontent['details-img2']; ?>" /><br>
  <input type="text" name="details-title2" value="<?php echo $projectcontent['details-title2']; ?>" /><br>
  <input type="text" name="details-text2" value="<?php echo $projectcontent['details-text2']; ?>" /><br>
  <input type="text" name="details-img3" value="<?php echo $projectcontent['details-img3']; ?>" /><br>
  <input type="text" name="details-title3" value="<?php echo $projectcontent['details-title3']; ?>" /><br>
  <input type="text" name="details-text3" value="<?php echo $projectcontent['details-text3']; ?>" /><br>
  <button type="submit">Modifier la page projet</button>
</form>

<a href="administration.php">retour</a>

</html>