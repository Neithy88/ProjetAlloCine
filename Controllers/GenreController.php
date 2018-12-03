<?php

//le controlleur inclut le ou les modèles
include('Models/Film.php');
include('Models/Genre.php');

//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
// $id = 2; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$id= $_GET['Genre'];

$genders = getMoviesByGenre($id);


// print_r($genders);

$Allgenders = getAllGenders();
 // just to understand

 
// function getAllGenders() {
//     global $dbh;

//     $Allgenders = $dbh->query('SELECT id_genres,`genre` FROM `genres`');
//     return $Allgenders->fetchAll();
//     //return $Allgenders->fetchAll(PDO::FETCH_COLUMN, 0);

// }
//******************* */
// function getMoviesByGenre($gender_id) {
//     global $dbh;

//     $movies = $dbh->query('SELECT * FROM films JOIN films_genres ON films.id_films = films_genres.id_films JOIN genres ON genres.id_genres= films_genres.id_genres WHERE genres.id_genres='.$gender_id.';');

//     return $movies->fetchAll();
// }



// print_r($Allgenders);

//inclure la vue
include('Views/GenreView.php');

?>