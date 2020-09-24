<?php
session_start();
require_once ('bd.php');
$values = date('Y-m-d h:i:s');
if(!empty($_POST['titre']) and !empty($_POST['discution']))
{
//Preparation de la requete qui va inserer les données
    $req = $bdd->prepare('INSERT INTO disc(titre,discution,dateCreate,chatId) VALUES(?,?,?,?)');
    //Execution de la requete
    $req->execute(array($_POST['titre'], $_POST['discution'],$values ,$_SESSION['id']));
    header('Location:admin/listDisc.php');
   
}
else
{
    header('Location:error.php');
    // function phpAlert($msg) {
    //     echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    // }
    // phpAlert(   "Hello world!\\n\\nVeille remplire tout les champs du formulaire"   );  
    
}
?>
<!-- 
<div>
      <h5>cliquez sur le bouton suivant enfin de remplire le formulaire</h5><br>
</div>
   <a href="admin/connect.php" class="btn btn-success text-center">Retour</a> -->