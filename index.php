
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
          <link rel="stylesheet" href="./assets/styl.css"> 
          
          <title>chat</title>
</head>
<body>
<?php include ('./assets/header.php'); ?><br><br>
<style>
.bar{
    border: 2px solid #0d6efd;
    background-color: #0d6efd;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="bar">
            </div><br>
            <h6 class="text-center"> Bonjour et Bienvenue sur Mk-evenment, Veuillez remplire les champs suivant</h6><br>
            <form action="essaiAppel.php" method="post">
                <div class="form-group">
                    <label for="nom"> Nom </label>
                    <input id="nom", class="form-control" type="text" name="nom">
                </div>
                <div class="form-group">
                    <label for="password"> password </label>
                    <input id="password", class="form-control" type="password" name="password"><br>
                </div>

                <!-- <div class="form-group">
                    <label for="pseudo"> Pseudo </label>
                    <input id="pseudo", class="form-control" type="text" name="pseudo">
                </div> -->
                <div class="text-center">  
                    <a href="admin/connect.php"class="btn btn-primary mr-5">S'inscrire</a>    
                    <input  class="btn btn-primary ml-5" type ="submit" value="Login">
               </div>
            </form>
        </div>
    </div>
</div>
    <?php include ('./assets/footer.php'); ?>
</body>
</html>