
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styl.css">       
    <title>Document</title>
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
        <div class="col-lg-8 mx-auto">
                <div class="bar">
                </div><br>
                <h5 class="text-center"> Bonjour, Veuillez entrer votre discution et donnez lui un tite</h5><br>
                <form action="../saveDiscution.php" method="post">
                    <div class="form-group">
                        <label for="titre"> Titre </label>
                        <input id="titre", class="form-control" type="text" name="titre">
                    </div>
                    <div class="form-group">
                        <label for="discution"> Descpition </label>
                        <input id="discution", class="form-control" type="text" name="discution"><br>
                    </div> 
                    <div class="text-center">
                      <input class="btn btn-primary" type ="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>  
    <?php include ('../assets/footer.php'); ?>
</body>
</html>