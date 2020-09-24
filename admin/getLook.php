<?php
session_start();
require_once ('../fonction/fonction.php');
require_once ('../bd.php');
$article = articles_get($bdd, $_GET['id']);
?> 
<!DOCTYPE html>
<html lang="">
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../assets/styl.css">       
</head>
<body>
   <?php include ('../assets/header.php'); ?><br>
   <h5 class="text-center mw-bold" style="font-size: 40px;"> <?=$article['titre']?> </h5>
   <p class="text-center mw-b" style="font-size: 20px;"><?=$article['discution']?></p>
   <div class="row">
      <div class="col-lg-8 mx-auto">
         <form class="text-center" action="comment.php?id=<?=$_GET['id']?>" method="post">
            <div>
               <label for="nom">Commentaire </label>
               <div class="form-group">
               <textarea class="form-control" name="commentaire" id="commentaire" cols="60" rows="5"></textarea>
            </div><br>
            <div class="mr-5">  
               <input  class="btn btn-primary ml-5" type ="submit" value="save">
            </div><br>
         </form>
   </div>
   </div>      
   <div class="card">
        <div class="card-header">
            <h6 class="text-danger"> Liste des commentaires </h6>
        </div>
        <?php include ('getComment.php'); ?>
   </div>
   <?php include ('../assets/footer.php'); ?>
</body>
</html>

                  