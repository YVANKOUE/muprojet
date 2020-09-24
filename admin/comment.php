<?php
session_start();
require_once ('../bd.php');
require_once('../fonction/fonction.php');
if(!empty($_POST['commentaire']))
{
    //Preparation de la requete qui va inserer les données
    $values = date('Y-m-d h:i:s');
    //Preparation de la requete qui va inserer les données
    $req = $bdd->prepare('INSERT INTO commentaires(commentaire,discId,chatId,dateCreate) VALUES(?,?,?,?)');
    //Execution de la requete
    $req->execute(array($_POST['commentaire'], $_GET['id'],$_SESSION['id'],$values));
    	
header( 'Location: getLook.php?id='.$_GET['id']);
}
else
{
    header('Location:../error.php');
}