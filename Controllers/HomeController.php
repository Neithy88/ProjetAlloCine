<?php

//le controlleur inclut le modèle
include('Models/Film.php');
include('Models/Genre.php');



//Récupérer les données (ici, tous les films car on est sur la home)
$movies = getAllMovies();

//traiter les données
foreach ($movies as $key => $movie) {
    $movie['description'] = ucfirst($movie['description']); //Mets une majuscule au nom du réalisateur
}

//inclure la vue
include('Views/HomeView.php');

