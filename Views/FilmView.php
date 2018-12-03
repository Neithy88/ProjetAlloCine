<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies & Co - <?=$page?></title>
    <link rel="stylesheet" href="public/css/style.css">
     <link href="navbar-top-fixed.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <script type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <!-- Personne ne modifie rien dans la page HomeView
    pour chaque nav : genre, acteur realisateur realisé un fichier view + un fichier model en s'inspirant de ce qu 'on a fait pour afficher tout les films de la page Home View'
    Anjum = Genre 
    Ophélie = Acteur
    Aurélie = Réalisateur
    Alex = img de la home vers filmphp-->
    
     <!-- Bootstrap core CSS -->
     <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="public/css/one-page-wonder.css" rel="stylesheet">
</head>
<body>

 <header>
    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src ="Views/image/logo2.png" alt='logo Movies'></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="?page=Home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=Genre">Genre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=Acteur">Acteur</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="?page=Realisateur">Réalisateur</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>

    <main role="main">

        <div class="container">
            <div class="row">
                <h1><?=$page?> :</h1>

                <h2><?=$movie['titre']?></h2>
                <div class="card mb-12 shadow-sm">
                    <img class="card-img-top" src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
                </div>

                <div class="card mb-12 shadow-sm">
                    <ul>
                        <li><h4>Année de sortie :</h4> <?=$movie['annee']?></li>
                        <li><h4>Réalisé par</h4> <?=$realisateur['realisateur']?></li>
                        <li><h4>Genre :</h4> <?php



                        foreach ($genre as $key => $genre) {
                        echo $genre['genre'].' ';

                        } 

                        // A trouver plus trd, comment enlever la dernière virgule :
                        //echo trim($test, ',');
                        // echo 'substr';
                        // echo substr($test, 0, strpos($test, ','));

                        ?>
                        </li>
                        <li><h4>Acteurs :</h4> <?php

                        foreach ($actors as $key => $actors) {
                        echo $actors['acteurs'].', ';

                        } 
                        ?></li>
                    </ul>
                </div>

                <h4>Synopsis :</h4>
                <p><?=$movie['description']?></p>

                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="?page=Home">Retour</a></button>
                </div>

            </div>
        </div>
    </main>
    
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
    
