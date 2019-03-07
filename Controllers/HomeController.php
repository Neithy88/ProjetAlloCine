<?php

//le controlleur inclut le modèle
include('Models/Film.php');
$id = 1;
//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();
$movie = getOneMovie($id);

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['titre'] = ucfirst($movie['titre']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('Views/HomeView.php');


