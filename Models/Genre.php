<?php

// Le modèle contient toutes les fonctions d'appel à la base de données.


// $dbh = new PDO('mysql:host=localhost;dbname=allocine', 'root', '');

// function getAllGenders() {
//     global $dbh;

//     $genders = $dbh->query('SELECT * FROM genres');

//     return $genders->fetchAll();

// }

// function getOneGender($id) {
//     global $dbh;

//     $genders = $dbh->query('SELECT * FROM genres WHERE id_genres='.$id.';');

//     return $genders->fetch();
// }