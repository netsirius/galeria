<?php
require 'functions.php';

$connection = connection('galeria','root','');

// si no nos podemos conectar a la base de datos
if(!$connection){
    header('Location: error.php');
    die();
}

// si la var id esta seteada la guardamos como entero, de lo contrario guardamos false
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

// Si no esta seteada reedirigimos a index.php
if(!$id){
    header('Location : index.php');
}

//Si todo va bien, preparamos y ejecutamos la query para traer la foto especificada
$statement = $connection->prepare("SELECT * FROM fotos WHERE id = :id");
$statement->execute(array(
    ':id' => $id
));

$photo = $statement->fetch();
// Si no se ha encontrado la foto en la bbdd, redirigimos al index
if(!$photo){
    header('Location : index.php');
}

require 'views/photo.view.php';
?>