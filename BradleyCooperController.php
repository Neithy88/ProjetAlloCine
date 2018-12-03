<?php

//le controlleur inclut le ou les modèles
include('Models/BradleyCooper.php');



//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
$id = 1; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$movie = getOneMovie($id);


//traiter les données
$movie['titre'] = ucfirst($movie['titre']);
$movie['annee'] = ucfirst($movie['annee']);
$movie['description'] = ucfirst($movie['description']);
$movie['image'] = ucfirst($movie['image']); //Mets une majuscule au nom du réalisateur




//inclure la vue
include('Views/BradleyCooperView.php');

?>