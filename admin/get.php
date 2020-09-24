<?php
require_once ('../fonction/fonction.php');

for ($donnee = 0 ; $donnee < count(articles_all($bdd)); $donnee++ )

{
    $id=articles_all($bdd)[$donnee] ['id'];
    $titre = articles_all($bdd)[$donnee]['titre'];
    echo "<li class='list-group-item'>"." <strong><i>"."<p style='margin-top:15px;'>$titre</p>"."</i></strong>"." <div style='text-align:center; margin-top:-50px;'><a href='getLook.php?id=$id' style:'margin-top:-95px' class='btn btn-primary'>Plus</a></div>"."<div style='margin-left:985px; margin-top:-40px;'><a  href='deleteDisc.php?id=$id' style:'margin-top:-95px' class='btn btn-primary'>Delete</a></div>"."</li>";
}

?> 
                  