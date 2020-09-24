<?php
require_once ('bd.php');

if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['pseudo'])and !empty($_POST['password']))
{
//Preparation de la requete qui va inserer les données
    $req = $bdd->prepare('INSERT INTO chat(nom,prenom,pseudo,password) VALUES(?,?,?,?)');
    //Execution de la requete
    $req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['password']));
    if($req->execute()){
        // recuperation du dernier IDELEVE inséreé dans la table eleves
    }
    header('Location:index.php');
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
      phpAlert(   "Hello!\\n\\n Veille remplire les info suivant pour pouvoir vous connecte"   );  
   
}
else
{
    // function phpAlert($msg) {
    //     echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    // }
    // phpAlert(   "Hello world!\\n\\nVeille remplire tout les champs du formulaire"   );  
    header('Location:error.php');
}
?>
<!-- <div>
      <h5>cliquez sur le bouton suivant enfin de remplire le formulaire</h5><br>
</div>
   <a href="admin/connect.php" class="btn btn-success text-center">Retour</a> -->