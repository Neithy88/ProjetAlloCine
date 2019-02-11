<?php
//le controlleur inclut le ou les modèles
include('Models/Film.php');


echo('<br/><br/><br/><br/><br/><br/><br/>');

//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$id=$_GET['filmId']; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$movie = getOneMovie($id);
$genres = getOneGender($id);
// $actors= getTheActors($id);
$realisateurs=getOneRealisateur($id);
$acteurs=getOneActeur($id);

//traiter les données
$movie['description'] = ucfirst($movie['description']); //Mets une majuscule au nom du réalisateur

foreach ($genres as $key => $genre) {
    $genre['genre'] = ucfirst($genre['genre']);
}


//inclure la vue
include('Views/FilmView.php');

?>