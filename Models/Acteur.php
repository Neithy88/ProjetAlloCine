<?php
$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', 'nGSoeBPL3pxfPTTz',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// $actor= getAllActors($id_acteurs);

function getMoviesByActors($id_acteurs) {
    global $dbh;
    // $actors = $dbh->query('SELECT * FROM acteurs');

    $id_acteurs= $dbh->query('SELECT * FROM films JOIN films_acteurs  ON films.id_films = films_acteurs.id_films WHERE films_acteurs.id_acteurs='.$id_acteurs.';');

    // ('SELECT * FROM acteurs JOIN films.id_acteurs ON films.id_films = films_acteurs.id_films WHERE films.id_acteurs='.$id_acteurs.';');
    return $id_acteurs->fetchAll();
}

function getAllActors() {
    global $dbh;
    
    $Allactors = $dbh->query('SELECT id_acteurs,nom,prenom FROM `acteurs`');
    return $Allactors->fetchAll();
    //return $Allgenders->fetchAll(PDO::FETCH_COLUMN, 0);
    
    } 

    // function getMoviesByActors($acteur_id) {
    //     global $dbh;
    
    //     $acteur_id = $dbh->query('SELECT *
    //     FROM films_acteurs.id_films
    //     JOIN acteurs ON acteurs.id_acteurs= films_acteurs.id_acteurs
    //     WHERE acteurs.id_acteurs='.$acteur_id.';');
    
    //     return $acteur_id->fetchAll();
    // }