<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
          <link rel="stylesheet" href="../assets/styl.css">       
    <title>chat</title>
</head>
<body> 
    <?php include ('../assets/header.php'); ?><br><br>
    <style>
        .bar{
            border: 2px solid #0d6efd;
            background-color: #0d6efd;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"> 
                <div class="bar">
                </div><br>
                <h5> Bonjour et Bienvenue sur Mk-evenment</h5><br>
                    <div>      
                    <a href="createDiscution.php" class="btn btn-primary">Create Disc</a>
                </div>
            </div>
        </div>
    </div><br>

    <div class="card">
        <div class="card-header">
            <h6 class="text-danger"> Liste des discutions </h6>
        </div>
        <?php include ('get.php'); ?>
    </div>
    <?php include ('../assets/footer.php');?>
    
</body>
</html>