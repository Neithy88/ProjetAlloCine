<!-- Pas de HTML dans les models et controllers : première balise HTML dans la vue-->
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
                <a class="navbar-brand" href="Home"><img src ="Views/image/logo2.png" alt='logo Movies'></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Genre">Genre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Acteur">Acteur</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Realisateur">Réalisateur</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Ajoute ton film :)</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- End Nav -->


    <!-- Start Main -->
    <main role="main">

        <div class="container">
            <div class="row">
        
                

                <div class="col md-6 ">
                <h2><?=$movie['titre']?></h2>
                    <ul>
                        
                        <li><h3>Année de sortie :</h3> <?=$movie['annee']?></li>
                        <li><h3>Réalisé par :</h3> <?php foreach ($realisateur as $key => $realisateur) {
                        echo $realisateur['nom'].' '.$realisateur['prenom'];}?></li>
                        <li><h3>Genre :</h3> <?php foreach ($genre as $key => $genre) {
                        echo $genre['genre'].' ';}?></li>
                        <li><h3>Acteurs :</h3> <?php
                            foreach ($actors as $key => $actors) {
                            echo $actors['nom'].' '.$actors['prenom'];} ?>
                        </li>

                    </ul>
                </div>
                <div class="col md-6">
                    <img class="card-img-top" src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
                </div>

                

            </div>
        </div>
        
        <div class="container">
            <div class="row">
            <h4>Synopsis :</h4>
                <p><?=$movie['description']?></p>

                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="Home">Retour</a></button>
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
    
