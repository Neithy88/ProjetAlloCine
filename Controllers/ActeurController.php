
<?php
//le controlleur inclut le ou les modèles
include('Models/Acteur.php');
//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
 //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$id= $_GET['acteurId'];

// $acteurs = getMoviesByActors($id); 

$Allactors = getAllActors();

$id_acteurs = getMoviesByActors($id);

include('Views/ActeurView.php');
?> 