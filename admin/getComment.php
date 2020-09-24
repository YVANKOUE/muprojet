<?php
 require_once ('../fonction/fonction.php');
 require_once ('../bd.php');
for ($donnee = 0 ; $donnee < count(comment_all($bdd)); $donnee++ )

{
    $comment = comment_all($bdd)[$donnee]['commentaire'];
    $datePost = comment_all($bdd)[$donnee]['dateCreate'];
    $nom = $_SESSION['nom'];
    echo "<li class='list-group-item'>"." <strong><i>"."<p style='margin-top:15px;'>$comment</p>"."</i></strong>"." <div style='text-align:center; margin-top:-50px;'><p>poste le</a>$datePost</div>"."<div style='margin-left:965px; margin-top:-40px;'><p>par   </a>$nom</div>"."</li>";
} 
?> 