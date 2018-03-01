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
    print_r($_FILES);
    //$check = getimagesize($_FILES['foto']['tmp_name']);
}

require 'views/upload.view.php';
?>