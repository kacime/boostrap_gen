<?php
// On récupère la page créée par l'utilisateur à l'aide d'un POST
$page = $_POST['page']; 
// On récupère le contenu de debut.html puis on crée un fichier copie.html avec ce contenu
$debut = file_get_contents("./pages/debut.html");
file_put_contents("copie.html", $debut);
// On crée la variable file, on place y copie.html
$file = 'copie.html';
// Une nouvelle personne à ajouter
// Ecrit le contenu dans le fichier, en utilisant le drapeau
// FILE_APPEND pour rajouter à la suite du fichier et
// LOCK_EX pour empêcher quiconque d'autre d'écrire dans le fichier
// en même temps
file_put_contents($file, $page, FILE_APPEND | LOCK_EX);
// On récupère fin.html qu'on met dans la variable fin, puis on ajoute le tout à file
$fin = file_get_contents("./pages/fin.html");
file_put_contents($file, $fin, FILE_APPEND | LOCK_EX);


?>