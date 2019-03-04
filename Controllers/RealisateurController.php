<?php
//le controlleur inclut le ou les modèles
include('Models/Film.php');

include('Models/Realisateur.php');
//Récupérer les données (ici, on est sur la page d'un film précis donc on récupère un seul film en fonction de l'ID)
 //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)

 if(isset($_GET['Realisateur'])){
    $realisateurs_id=$_GET['Realisateur'];
}
else {
   $realisateurs_id = 1;
}

$realisateurs = getMoviesByRealisateurs($realisateurs_id);
// print_r($genders);
$Allrealisateurs = getAllRealisateurs();

include('Views/RealisateurView.php');

?> 
