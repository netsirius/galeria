<?php
require 'functions.php';
// cantidad de fotos por pag
$nphotos = 8;
// si page esta seteado, lo guardamos como un entero evitando inyección de cófigo
$actual_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
/**
 * si es mayor a 1, traemos las paginas desde la que pertoque, en caso 
 * contrario desde la primera
 */
$first =($actual_page > 1) ? $actual_page * $nphotos - $nphotos : 0;

$connection = connection('galeria','root','');

if(!$connection){
    header('Location: error.php');
    die();
}

$statement = $connection->prepare("
    SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $first, $nphotos
");

$statement->execute();
// guardamos el array de fotos
$photos = $statement->fetchAll();

if(!$photos){
    header('Location: index.php');
}

$statement = $connection->prepare("SELECT FOUND_ROWS() as total_rows");
$statement->execute();
$total_post = $statement->fetch()['total_rows'];

$total_pages = ceil($total_post / $nphotos);

require 'views/index.view.php';
?>