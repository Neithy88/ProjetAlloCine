<?php

//Le modèle contient toutes les fonctions d'appel à la base de données.


$dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

function getOneMovie($id) {
    global $dbh;

    $movies = $dbh->query('SELECT * FROM films WHERE id_films='.$id.';');

    return $movies->fetch();
}
