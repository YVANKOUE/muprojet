
<?php
require_once ('../bd.php');   
function articles_get($bdd, $id){
    $id = $_GET["id"];
    $stmt = $bdd->prepare("SELECT * FROM disc WHERE id = $id");
    if ($stmt->execute(array())){
 
        return $stmt->fetch();
 
    }
 }
function articles_all($bdd){

    $stmt = $bdd->query('SELECT * FROM disc ORDER BY id DESC');
    if ($stmt->execute()){
        return $stmt->fetchAll();
    }
}
function comment_all($bdd){
    $id = $_GET["id"];
    $stmt = $bdd->prepare("SELECT * FROM commentaires WHERE $id = commentaires.discId");
    if ($stmt->execute()){
        return $stmt->fetchAll();
    }
}
function chatId($bdd){
    $stmt = $bdd->query('SELECT * FROM chat ORDER BY id DESC');
    if ($stmt->execute()){
        return $stmt->fetchAll();
    }
}
?>