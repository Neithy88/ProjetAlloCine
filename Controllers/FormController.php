<?php

include('models/Film.php');
include('models/Genre.php');
include('models/Realisateur.php');
include('models/Form.php');


if (isset($_POST['valider'])) {
$new_titre=$_POST['titre'];
$new_date=$_POST['date'];
$new_description=$_POST['description'];
$new_realisateur=$_POST['realisateur'];
$new_genre=$_POST['genre'];
$new_image=$_POST['image'];
//$insert=1;
$insert = sendNewMovieToDB($new_titre, $new_description, $new_date, $new_image);
$insert_film=sendNewRealToDB($new_realisateur);
 

$update_real=updateTheReal();




include('views/ResultView.php');
} else {
include('views/FormView.php');
}


