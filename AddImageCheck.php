<?php

function addImageCheck($image, $imageSize) {

    $target_dir = "images/";
    $target_file = $target_dir.$image;
    $uploadCheckValue = 1;
    $imageMaxSize = 2097152;
    $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));

    // Check if the image already exists in the folder images
    if (file_exists($target_file)) {
        echo "Erreur : l'image existe déjà dans le répertoire images !\n";
        $uploadCheckValue = 0;
    }

    // Check file size
    if ($imageSize > $imageMaxSize) {
        echo "Erreur : la taille maximum est 2M !\n";
        $uploadCheckValue = 0;
    }

    // Allow only certain images formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Erreur : les formats acceptés sont : JPG, JPEG, PNG, GIF !\n";
        $uploadCheckValue = 0;
    }

    // Check the uploadCheckValue (image can uploaded or not !)
    if ($uploadCheckValue == 0) {
        echo "Erreur : l'image n'est pas ajoutée au répertoire !\n";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // Send a response to success in Ajax to display it
            echo "Succès : l'image est ajoutée !\n";
            return true;
        } else {
            echo "Erreur de chargement : l'image n'a pas pu être ajoutée !\n";
        }
    }
}
?>