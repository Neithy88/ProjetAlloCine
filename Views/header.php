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
     <!-- Bootstrap core CSS -->
     <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="public/css/one-page-wonder.css" rel="stylesheet">
</head>
<body class="bg-light">

    <header><!-- Navigation -->
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
                            
                        </ul>
                </div>
            </div>
        </nav>

    </header>