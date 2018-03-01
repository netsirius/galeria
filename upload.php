<?php
require 'functions.php';

$connection = connection('galeria','root','');

if(!$connection){
    header('Location: error.php');
    die();
}
/**
 * Comprobamos que los datos se hayan enviado por el método post
 * y se hayan enviado una imagen
 */
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    //Comprobamos que lo que se envia es una imagen
    //en tmp_name se guarda la imagen temporalmente cuando la estamos subiendo
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if($check!== false){
        $dest_folder = 'photos/';
        // destino, dond euqeremos guardar laimagen
        $uploaded_file = $dest_folder . $_FILES['foto']['name'];
        // movemos la imagen a la carpeta deseada
        move_uploaded_file($_FILES['foto']['tmp_name'], $uploaded_file);
        // preparando la query
        $statement = $connection->prepare('
            INSERT INTO fotos (titulo, imagen, texto)
            VALUES (:title, :image, :text)
        ');
        // ejecutando la query
        $statement->execute(array(
            ':title' => $_POST['titulo'],
            ':image' => $_FILES['foto']['name'],
            ':text' =>  $_POST['texto']
        ));

        //Redirigimos al index para visualizar las fotos
        header('Location: index.php');
    }else{
        $error = "El archivo no es una imagen o es muy pesado";
    }
}

require 'views/upload.view.php';
?>