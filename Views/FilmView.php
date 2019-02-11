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
    <main role="main" id="mainview">

        <div class="container">
            <div class="row">
        

                <div class="col md-6 ">
                <h2><img src="Views/image/clapperboard1.png" alt="claplogo" id="clapp"><?=$movie['titre']?></h2>
                    <ul>
                    
                        <li><h3>Année de sortie :</h3> <?=$movie['annee']?></li>
                        <li><h3>Réalisé par :</h3> 
                        <?php foreach ($realisateurs as $key => $realisateur) {
                            echo $realisateur['prenom'].' '.$realisateur['nom'];
                        } ?> 
                        </li>
                        <li><h3>Genre :</h3> <?php foreach ($genres as $key => $genre) {
                        echo $genre['genre'].' ';}?></li>
                        <li><h3>Acteurs :</h3> <?php
                            foreach ($acteurs as $key => $acteur) {
                            echo $acteur['prenom'].' '.$acteur['nom'].'<br/>';} ?>
                        </li>
                        
                        <li><h3>Note :</h3> 


                        <!-- SANS  BASE DE DONNEES DIRECTEMENT SUR L API  -->

                        <!-- recuperer l id sur l api -->
                        <?php 
                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?s=".urlencode($movie['titre'])."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);
                        $response = json_decode($response, true); //because of true, it's in an array
                       
                        // afficher la reponse depuis l api
                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?i=". $response['Search'][0]['imdbID']."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);
                        $response = json_decode($response, true); //because of true, it's in an array
                        echo $response['Ratings'][0]['Value']."<br>";
                        // AVEC ENTREE ID IMDB DANS BASE DE DONNEES
                        $curl = curl_init();
                        $url = "http://www.omdbapi.com/?i=".$movie['imdbID']."&apikey=aa168fab";
                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 30,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                        ));
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);
                        $response = json_decode($response, true); //because of true, it's in an array
                        echo "Note IMDB : ".$response['Ratings'][0]['Value']."<br>";
                        ?>
 
                    </li>

                    </ul>
                </div>
                <div class="col md-6">
                    <img class="card-img-top" src= "<?= 'Views/image/'.$movie['image']?>"alt="<?=$movie['titre']?>">
                </div>

                

            </div>
        </div>
        
        <div class="container" id="description">
            <div class="row">
            <h4><img src="Views/image/camera2.png" alt="claplogo" id="camera">Synopsis :</h4>
                <p><?=$movie['description']?></p>

                <div class="btn-group">
                    <button type="button" id="btnhome"class="btn btn-sm-warning btn-outline-secondary"><a href="Home">Home</a></button>
                </div>

            </div>
        </div>

    </main>


    <!-- <footer class="footer">
      <div class="container">
       
        <span class="text-muted">Created by Anjum Heriau, Aurélie Thècle Augustin, Ophélie Donizetti, Alexandra Moullet </span>
      </div>
    </footer> -->
    
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
    