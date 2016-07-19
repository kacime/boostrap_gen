<?php

    # create new zip opbject
    $zip = new ZipArchive();

    # create a temp file & open it
    $tmp_file = tempnam('.','');
    $zip->open($tmp_file, ZipArchive::CREATE);

     $zip->addFile('javascript.html');
      $zip->addFile('assets/img/equipe.jpg');
      $zip->addFile('assets/img/accueil.jpg');

    # close zip
    $zip->close();

    # send the file to the browser as a download
    header('Content-disposition: attachment; filename=page.zip');
    header('Content-type: application/zip');
    readfile($tmp_file);
 ?>