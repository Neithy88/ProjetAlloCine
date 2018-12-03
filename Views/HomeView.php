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
                    <li class="nav-item">
                    <a class="nav-link" href="?page=Realisateur">Ajoute ton film :)</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <main role="main">
       
        
        <div class="album py-5 bg-light">
            
            <div class="container">
              
                <div class="row">
                <?php foreach ($movies as $key => $movie) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
                                <div class="card-body">
                                
                                    <div class="d-flex justify-content-between align-items-center">
                                    
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a href="<?='Film?filmId='.$movie['id_films']?>">Details</a>
                                            </button>
                                        </div>
                                   
                                        <small class="text-muted"><?= $movie['annee']?></small>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <?php endforeach; ?> 
                </div>
                    
               
            </div>
           
        </div>
       
    </main>


 
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Bootstrap core JavaScript -->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>