<?php session_start(); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<?php
require_once ('bd.php');
$reponses = $bdd->query('SELECT * FROM chat ORDER BY id DESC');
$donnees = $reponses->fetchAll();//permet de mettre tous les info de la bd dans un tableau
foreach ($donnees as $donnee)
{
if(!empty($_POST['nom']) and !empty($_POST['password']) and $_POST['nom'] == $donnee['nom'] and $_POST['password'] == $donnee['password']){
    $username = $_POST['nom'];
    $query=$bdd->prepare("SELECT id FROM chat WHERE nom='".$username."' LIMIT 1");
    $query->execute();
    $row=$query->fetch();
    foreach($row as $id){
        $_SESSION['nom'] = $username;
        $_SESSION['id'] =$id;
    }
    // $nom = $_POST['nom'];
    // $req = $bdd->prepare('SELECT * FROM chat');
    // $req->fetch() ;
    // $_SESSION['id'] = $req;

    //    $sql = $bdd->prepare('SELECT * FROM chat WHERE nom=":identifiant" AND password=":password"');
    //     $sql->execute(array(
    //     'nom' => $_POST['nom'],
    //     'password' => sha1($_POST['password']),
    //     ));
    //     $_SESSION['id'] = $sql;
    //     if($user = $sql->fetch(PDO::FETCH_ASSOC))
    //         {
    //             $_SESSION['id'] = $user['id'];
    //             $_SESSION['nom'] = $user['nom'];
    //         }
    header('Location:admin/listDisc.php');
}else{
    echo   "Veillez remplire tout les champs du formulaire"."<br>";
    // header('Location:error.php');
 }
}
?>
<div>
            <h5>cliquez sur le bouton suivant enfin de remplire le formulaire</h5><br>
        </div>
            <a href="index.php" class="btn btn-primary">Retour</a>
</div>
