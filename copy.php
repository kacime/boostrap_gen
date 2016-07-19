<?php
$email = $_POST['name']; 

$file = file_get_contents("http://localhost:8888/debut.html");
file_put_contents("prout.html", $file);




$file = 'prout.html';
// Une nouvelle personne à ajouter
$person = "Jean Dupond\n";
// Ecrit le contenu dans le fichier, en utilisant le drapeau
// FILE_APPEND pour rajouter à la suite du fichier et
// LOCK_EX pour empêcher quiconque d'autre d'écrire dans le fichier
// en même temps
file_put_contents($file, $email, FILE_APPEND | LOCK_EX);



?>