
<?php
require_once('../bd.php');
    $id = $_GET['id'];
    $stmt = $bdd->prepare("DELETE FROM disc WHERE id = $id");
    $stmt->execute();
header("Location: listDisc.php");
?>