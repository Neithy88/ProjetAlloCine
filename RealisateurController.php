<?php

//le controlleur inclut le ou les modèles
include('Models/Realisateur.php');



//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
 //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$directors = getAllDirectors();


//traiter les données
foreach ($directors as $key => $director) {
    $director['prenom'] = ucfirst($director['prenom'])." ".$director['nom'] = ucfirst($director['nom']) ; //Mets une majuscule au nom du réalisateur

}

//inclure la vue
include('Views/RealisateurView.php');



// $directors = getAllDirectors();
// $id = 1;
// $moviedirector = getOneMovieDirector($id);


// //traiter les données
// foreach ($directors as $key => $director) {
//     $director['prenom'] = ucfirst($director['prenom'])." ".$director['nom'] = ucfirst($director['nom']) ; //Mets une majuscule au nom du réalisateur

// }

// $moviedirector['id_films'] = ucfirst($moviedirector['id_films']);

// //inclure la vue
// include('Views/RealisateurView.php');
?>


