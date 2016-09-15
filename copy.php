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
// On crée une copie dans le répertoire qui va être envoyé
$upload = file_get_contents("copie.html");
file_put_contents("./final/final.html", $upload);
// On efface tous les fichiers images pour partir sur un dossier propre pour le telechargement final
$files = glob('./final/assets/img/*'); // on récupère tous les noms de fichiers
foreach($files as $img){ // iteration
  if(is_file($img))
    unlink($img); // on efface les fichiers
}
// générateur de fichiers images utilisées à télécharger
require_once('./copy_img/simple_html_dom.php');
require_once('./copy_img/url_to_absolute.php');

//$url = 'http://localhost:8888/copie.html';
$url = 'http://localhost:8888/copie.html';

$html = file_get_html($url);
$absolu = 0;
foreach($html->find('img') as $element) {
    $absolu = url_to_absolute($url, $element->src);
    $path_parts = pathinfo($absolu);
    $fichier = $_SERVER['DOCUMENT_ROOT'].'/final/assets/img/'.$path_parts['filename'].'.jpg';

$ch = curl_init($absolu);
$fp = fopen($fichier, 'wb');

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
}

// on fait appel à zip.php pour générer le fichier zip
include('zip.php');


?>