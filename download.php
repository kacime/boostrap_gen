<?php





   // On peut ensuite, comme dans le tuto de DHKold, proposer le téléchargement.
    header('Content-Transfer-Encoding: binary'); //Transfert en binaire (fichier).
    header('Content-Disposition: attachment; filename="Zip.zip"'); //Nom du fichier.
    header("Content-type: application/zip");
    header('Content-Length: '.filesize('Zip.zip')); //Taille du fichier.

     
    readfile('Zip.zip');

    
?>