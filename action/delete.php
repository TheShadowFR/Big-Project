<?php
require_once "../cfg/config.php";
if ($_SESSION['user']['admin'] == 0) {
    header('Location: index.php');
    exit();
}

$sql = "DELETE FROM :bdd WHERE id = :id;";
$pre = $pdo->prepare($sql);
$pre->bindParam("id", $_POST['id']);
$pre->execute();
header('Location:../administration.php');
?>