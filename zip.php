<?php
// Création de l'objet ZIP
$zip = new ZipArchive();

// On créée le zip et on l'ouvre
if ($zip->open('Zip.zip', ZipArchive::CREATE) === true) {
    $zip->addFile('./final/final.html');
    // On répertorie les fichiers images présents dans le dossier final
    $fichiers = scandir('./final/assets/img/');
    // On enlève . et .. qui représentent le dossier courant et le dossier parent.
    unset($fichiers[0], $fichiers[1]);

    // Ajouter de chachune des images au fichier zip
    foreach ($fichiers as $f) {
        // On ajoute chaque fichier à l’archive en conservant le chemin
        if (!$zip->addFile('./final/assets/img/' . $f)) {
            echo 'Impossible d ajouter' . $f . '.<br/>';
        }
    }
    // on ferme le zip
    $zip->close();
    
    require './download.php';
} else {
    echo 'Impossible d ouvrir Zip.zip<br/>';
    // Traitement des erreurs avec un switch(), par exemple.
}
